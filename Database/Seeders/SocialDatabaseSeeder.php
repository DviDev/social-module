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

        User::query()->each(function (User $user) {
            SocialGroupModel::factory()->count(config('app.MODULE_SEED_COUNT'))->create([
                'user_id' => $user->id,
                'workspace_id' => $user->workspaces()->inRandomOrder()->first()->id,
            ])->each(function (SocialGroupModel $group) use ($user) {
                $group->workspace_id = $user->workspaces()->inRandomOrder()->first()->id;
                $group->save();

                PostModel::factory()->for($user, 'user')->count(config('app.MODULE_SEED_COUNT'))->create()
                    ->each(function (PostModel $post) use ($group, $user) {
                        SocialGroupPostModel::factory()
                            ->for($group, 'group')
                            ->for($post, 'post')
                            ->create();

                        $this->call(PostCommentTableSeeder::class, true, compact('post', 'user'));
                    });

                User::query()->each(function (User $user) use ($group) {
                    SocialGroupUserModel::factory()
                        ->for($group, 'group')
                        ->for($user, 'user')
                        ->create();
                });

                $user->workspaces()->each(function (WorkspaceModel $workspace) use ($user) {
                    SocialPageModel::factory()->count(config('app.MODULE_SEED_COUNT'))
                        ->for($user, 'user')
                        ->for($workspace, 'workspace')
                        ->create()->each(function (SocialPageModel $page) use ($user) {
                            PostModel::factory()->for($user, 'user')->count(config('app.MODULE_SEED_COUNT'))->create()
                            ->each(function (PostModel $post) use ($page, $user) {
                                SocialPagePostModel::factory()
                                    ->for($page, 'page')
                                    ->for($post, 'post')
                                    ->create();

                                SocialPageFollowerModel::factory()
                                    ->for($page, 'page')
                                    ->for($user, 'user')
                                    ->create();
                            });
                        });
                });

            });

            SocialPollModel::factory()->count(config('app.MODULE_SEED_COUNT'))->for($user, 'user')->create()
            ->each(function (SocialPollModel $poll) use ($user) {
                SocialPollItemModel::factory()->count(config('app.MODULE_SEED_COUNT'))->for($poll, 'poll')->create()
                ->each(function (SocialPollItemModel $item) use ($user) {
                    SocialPollItemVoteModel::factory()
                        ->for($item, 'item')
                        ->for($user, 'user')
                        ->create();
                });
            });

        });

        //criar seed de usuarios seguidores

        //user profile

        //user abount

        //interesses

        //esportes

        //loja
    }
}
