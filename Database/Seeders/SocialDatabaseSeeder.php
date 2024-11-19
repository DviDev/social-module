<?php

namespace Modules\Social\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Modules\App\Database\Seeders\MessageTableSeeder;
use Modules\Base\Database\Seeders\BaseSeeder;
use Modules\Base\Models\RecordModel;
use Modules\DBMap\Domains\ScanTableDomain;
use Modules\Permission\Database\Seeders\PermissionTableSeeder;
use Modules\Post\Models\PostModel;
use Modules\Project\Models\ProjectModuleModel;
use Modules\Social\Models\SocialGroupModel;
use Modules\Social\Models\SocialGroupPostModel;
use Modules\Social\Models\SocialPageFollowerModel;
use Modules\Social\Models\SocialPageModel;
use Modules\Social\Models\SocialPagePostModel;
use Modules\Social\Models\SocialPollItemModel;
use Modules\Social\Models\SocialPollItemVoteModel;
use Modules\Social\Models\SocialPollModel;
use Modules\Social\Models\SocialUserFollowerModel;
use Modules\Social\Models\SocialUserProfileModel;
use Modules\Social\Models\SocialWorkspaceModel;
use Modules\Workspace\Models\WorkspaceModel;
use Nwidart\Modules\Facades\Module;

class SocialDatabaseSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->commandWarn(__CLASS__, "💦🌱 seeding");

        $modules = collect(Module::allEnabled());
        if ($modules->contains(['DBMap', 'Project'])) {
            (new ScanTableDomain())->scan('social');
            $module = ProjectModuleModel::byName('Social');

            //Todo ligar o projeto com a rede social atraves da app_record_id

            if ($modules->contains('Permission')) {
                $this->command->warn(PHP_EOL . ' 🤖 Social Permission data creating ...');
                $this->call(class: PermissionTableSeeder::class, parameters: ['module' => $module]);
            }
        }

        $this->command->warn(PHP_EOL . ' 🤖🪴Social data seeding ...');

        if ($modules->contains('Workspace')) {
            //criar workspace with visibility
            /**@var WorkspaceModel $workspace */
            $me = User::find(1);
            $workspaces = WorkspaceModel::byUserId(1);
            $workspaces->each(function (WorkspaceModel $workspace) {
                SocialWorkspaceModel::factory()
                    ->for($workspace, 'workspace')
                    ->for($workspace->user, 'owner')
                    ->sequence(collect([
                        ['visibility' => 'public'],
                        ['visibility' => 'private']
                    ])->random())
                    ->create();
            });

            $workspace = $workspaces->first() ?: WorkspaceModel::factory()->for($me)->create();

            $workspace->participants->each(function (User $user) use ($workspace) {
                SocialUserProfileModel::factory()->for($user)->create();

                $this->createGroups($user, $workspace);

                $this->createUserFollowers($workspace, $user);

                $this->createSocialPollModel($user);
            });
        }

        $this->commandInfo(__CLASS__, '🟢 done');
    }

    function createGroups(User $user, WorkspaceModel $workspace): void
    {
        $seed_total = config('app.SEED_MODULE_COUNT');
        SocialGroupModel::factory()
            ->afterCreating(function (SocialGroupModel $group) use ($user, $workspace, $seed_total, &$seeded) {
                $this->createPosts($group, $user);

                $group->participants()->attach($workspace->participants->modelKeys());

                $this->createSocialPage($user);
            })
            ->count($seed_total)->create([
                'user_id' => $user->id,
                'workspace_id' => $workspace->id,
            ]);
    }

    function createPosts(SocialGroupModel $group, User $user): void
    {
        if (!collect(Module::allEnabled())->contains('Post')) {
            return;
        }
        $seed_total = config('app.SEED_MODULE_COUNT');

        $entities = RecordModel::factory($seed_total)->create()->all()->map(fn($m) => ['record_id' => $m->id]);
        PostModel::factory($seed_total)
            ->for($user, 'user')
            ->sequence(...$entities)
            ->afterCreating(function (PostModel $post) use ($group, $user, $seed_total, &$seeded) {
                $entity = RecordModel::factory()->create();
                $post->record_id = $entity->id;
                SocialGroupPostModel::factory()
                    ->for($group, 'group')
                    ->for($post, 'post')
                    ->create();

                $this->call(MessageTableSeeder::class, parameters: compact('entity', 'user'));
            })->create();
    }

    function createSocialPage(User $user): void
    {
        WorkspaceModel::byUserId($user->id)->with('participants')->each(function (WorkspaceModel $workspace) use ($user) {
            SocialPageModel::factory(config('social.SEED_SOCIAL_PAGES_COUNT'))
                ->afterCreating(function (SocialPageModel $page) use ($user, $workspace) {
                    $this->createPagePosts($page, $user, $workspace);

                    $page->followers()->sync(User::get()->modelKeys());
                })
                ->for($user)
                ->for($workspace)
                ->create();
        });
    }

    function createPagePosts(SocialPageModel $page, User $user, WorkspaceModel $workspace)
    {
        if (!collect(Module::allEnabled())->contains('Post')) {
            return;
        }
        $seed_total = config('social.SEED_SOCIAL_PAGE_POSTS_COUNT');
        PostModel::factory($seed_total)
            ->for($user)
            ->afterCreating(function (PostModel $post) use ($page, $user, $workspace) {
                SocialPagePostModel::factory()->for($page)->for($post)->create();

                $this->socialPageFollowed($workspace, $page);
            })
            ->create();
    }

    public function socialPageFollowed(WorkspaceModel $workspace, SocialPageModel $page): void
    {
        $workspace->participants->each(function (User $user) use ($page) {
            SocialPageFollowerModel::factory()->for($page)->for($user)->create();
        });
    }

    /**
     * @param WorkspaceModel $workspace
     * @param User $user
     * @return void
     */
    public function createUserFollowers(WorkspaceModel $workspace, User $user): void
    {
        $workspace->participants()->whereNot('user_id', $user->id)
            ->each(function (User $follower) use ($user) {
                SocialUserFollowerModel::factory()
                    ->for($user, 'user')
                    ->for($follower, 'follower')
                    ->create();
            });
    }

    public function createSocialPollModel(User $user): void
    {
        $seed_total = config('app.SEED_MODULE_COUNT');
        SocialPollModel::factory()
            ->afterCreating(function (SocialPollModel $poll) use ($user, $seed_total) {
                $this->createSocialPollItem($poll, $user);
            })
            ->count($seed_total)->for($user, 'user')->create();
    }

    public function createSocialPollItem(SocialPollModel $poll, User $user): void
    {
        SocialPollItemModel::factory()
            ->count(config('app.SEED_MODULE_COUNT'))
            ->for($poll)
            ->afterCreating(function (SocialPollItemModel $item) use ($user) {
                SocialPollItemVoteModel::factory()
                    ->for($item)
                    ->for($user)
                    ->create();
            })
            ->create();
    }
}
