<?php

namespace Modules\Social\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Post\Database\Seeders\PostCommentTableSeeder;
use Modules\Post\Models\PostModel;
use Modules\Social\Models\SocialGroupModel;
use Modules\Social\Models\SocialGroupPostModel;
use Modules\Social\Models\SocialGroupUserModel;
use Modules\Social\Models\SocialPageFollowerModel;
use Modules\Social\Models\SocialPageModel;
use Modules\Social\Models\SocialPagePostModel;
use Modules\Social\Models\SocialPollItemModel;
use Modules\Social\Models\SocialPollItemVoteModel;
use Modules\Social\Models\SocialPollModel;
use Modules\Workspace\Models\WorkspaceModel;

class SocialDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $workspace = User::find(1)->workspaces()->first();
        $workspace->participants->each(function (User $user) use ($workspace) {
            $this->createGroups($user, $workspace);

            $this->createSocialPollModel($user);

        });

        //criar seed de usuarios seguidores

        //user profile

        //user about

        //interesses

        //esportes

        //loja
    }

    function createPosts(SocialGroupModel $group, User $user): void
    {
        $seed_total = config('app.MODULE_SEED_COUNT');
        $seeded = 0;
        PostModel::factory()
            ->afterCreating(function (PostModel $post) use ($group, $user, $seed_total, &$seeded) {
                SocialGroupPostModel::factory()
                    ->for($group, 'group')
                    ->for($post, 'post')
                    ->create();

                $seeded++;
                ds("social group $group->id post $seeded / $seed_total");

                $this->call(PostCommentTableSeeder::class, true, compact('post', 'user'));
            })
            ->for($user, 'user')->count($seed_total)->create();
    }

    function createGroupUsers(WorkspaceModel $workspace, SocialGroupModel $group): void
    {
        $seed_total = $workspace->participants()->count();
        $seeded = 0;
        $workspace->participants->each(function (User $user) use ($group, $seed_total, &$seeded) {
            SocialGroupUserModel::factory()
                ->for($group, 'group')
                ->for($user, 'user')
                ->create();

            $seeded++;
            ds("social group $group->id user $seeded / $seed_total");
        });
    }

    function createSocialPage(User $user, WorkspaceModel $workspace): void
    {
        $user->workspaces->each(function (WorkspaceModel $workspace) use ($user) {
            $seed_total = config('app.MODULE_SEED_COUNT');
            $seeded = 0;
            SocialPageModel::factory()
                ->afterCreating(function (SocialPageModel $page) use (
                    $user, $workspace, $seed_total,
                    &$seeded
                ) {
                    $seeded++;
                    ds("social page $seeded / $seed_total");

                    $this->createPagePosts($page, $user, $workspace);
                })
                ->count($seed_total)
                ->for($user, 'user')
                ->for($workspace, 'workspace')
                ->create();
        });
    }

    /**
     * @param SocialPageModel $page
     * @param User $user
     * @param WorkspaceModel $workspace
     * @return int
     */
    function createPagePosts(SocialPageModel $page, User $user, WorkspaceModel $workspace): int
    {
        $seed_total = config('app.MODULE_SEED_COUNT');
        $seeded = 0;
        PostModel::factory()
            ->afterCreating(function (PostModel $post) use (
                $page, $user, $workspace,
                $seed_total, &$seeded
            ) {
                SocialPagePostModel::factory()
                    ->for($page, 'page')
                    ->for($post, 'post')
                    ->create();
                ds("social page $page->id post $seeded / $seed_total");

                $this->socialPageFollowed($workspace, $page);
            })
            ->for($user, 'user')->count($seed_total)->create();
        return $seeded;
    }

    /**
     * @param WorkspaceModel $workspace
     * @param SocialPageModel $page
     * @return void
     */
    function socialPageFollowed(WorkspaceModel $workspace, SocialPageModel $page): void
    {
        $workspace->participants->each(function (User $user) use ($page) {
            SocialPageFollowerModel::factory()
                ->for($page, 'page')
                ->for($user, 'user')
                ->create();
            ds("social page $page->id follower $user->id");
        });
    }

    function createGroups(User $user, WorkspaceModel $workspace): void
    {
        $seed_total = config('app.MODULE_SEED_COUNT');
        $seeded = 0;
        SocialGroupModel::factory()
            ->afterCreating(function (SocialGroupModel $group) use ($user, $workspace, $seed_total, &$seeded) {
                $seeded++;
                ds("social group $seeded / $seed_total");

                $this->createPosts($group, $user);

                $this->createGroupUsers($workspace, $group);

                $this->createSocialPage($user, $workspace);

            })
            ->count($seed_total)->create([
                'user_id' => $user->id,
                'workspace_id' => $workspace->id,
            ]);
    }

    function createSocialPollItem(SocialPollModel $poll, User $user): void
    {
        $seed_total = config('app.MODULE_SEED_COUNT');
        $seeded = 0;
        SocialPollItemModel::factory()
            ->afterCreating(function (SocialPollItemModel $item) use ($poll, $user, $seed_total, &$seeded) {
                $seeded++;
                ds("social poll $poll->id item $seeded / $seed_total");

                SocialPollItemVoteModel::factory()
                    ->for($item, 'item')
                    ->for($user, 'user')
                    ->create();
            })
            ->count($seed_total)->for($poll, 'poll')->create();
    }

    function createSocialPollModel(User $user): void
    {
        $seed_total = config('app.MODULE_SEED_COUNT');
        $seeded = 0;
        SocialPollModel::factory()
            ->afterCreating(function (SocialPollModel $poll) use ($user, $seed_total, &$seeded) {
                $seeded++;
                ds("poll $seeded / $seed_total");
                $this->createSocialPollItem($poll, $user);
            })
            ->count($seed_total)->for($user, 'user')->create();
    }
}
