<?php

namespace Modules\Social\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Post\Models\PostModel;
use Modules\Social\Entities\SocialGroup\SocialGroupEntityModel;
use Modules\Social\Models\SocialGroupModel;
use Modules\Social\Models\SocialGroupPostModel;
use Modules\Social\Models\SocialGroupUserModel;
use Modules\Social\Models\SocialPageFollowerModel;
use Modules\Social\Models\SocialPageModel;
use Modules\Social\Models\SocialPagePostModel;
use Modules\Social\Models\SocialPollItemModel;
use Modules\Social\Models\SocialPollItemVoteModel;
use Modules\Social\Models\SocialPollModel;
use Modules\Workspace\Entities\Workspace\WorkspaceEntityModel;
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

        $social = SocialGroupEntityModel::props();
        User::query()->each(function (User $user) {

            SocialGroupModel::factory()->count(11)->create([
                'user_id' => $user->id,
                'workspace_id' => $user->workspaces()->inRandomOrder()->first()->id,
            ])->each(function (SocialGroupModel $group) use ($user) {
                $group->workspace_id = $user->workspaces()->inRandomOrder()->first()->id;
                $group->save();

                PostModel::factory()->for($user, 'user')->count(11)->create()
                    ->each(function (PostModel $post) use ($group) {
                        SocialGroupPostModel::factory()
                            ->for($group, 'group')
                            ->for($post, 'post')
                            ->create();
                    });

                User::query()->each(function (User $user) use ($group) {
                    SocialGroupUserModel::factory()
                        ->for($group, 'group')
                        ->for($user, 'user')
                        ->create();
                });

                $user->workspaces()->each(function (WorkspaceModel $workspace) use ($user) {
                    SocialPageModel::factory()->count(11)
                        ->for($user, 'user')
                        ->for($workspace, 'workspace')
                        ->create()->each(function (SocialPageModel $page) use ($user) {
                            PostModel::factory()->for($user, 'user')->count(11)->create()
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

            SocialPollModel::factory()->count(11)->for($user, 'user')->create()
            ->each(function (SocialPollModel $poll) use ($user) {
                SocialPollItemModel::factory()->count(3)->for($poll, 'poll')->create()
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
