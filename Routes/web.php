<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\User;
use Modules\Social\Models\SocialGroupModel;
use Modules\Social\Models\SocialPageModel;
use Modules\Social\Models\SocialPollItemModel;
use Modules\Social\Models\SocialPollModel;
use Modules\Workspace\Models\WorkspaceModel;

Route::prefix('social')->group(function () {
    Route::get('/{workspace}/groups', fn(WorkspaceModel $workspace) =>
        view('social::components.page.groups_page', compact('workspace')))
        ->name('admin.social.groups');
    Route::get('/group/{group}/posts', fn(SocialGroupModel $group) =>
        view('social::components.page.group_posts_page', compact('group')))
        ->name('admin.social.group.posts');
    Route::get('/group/{group}/users', fn(SocialGroupModel $group) =>
        view('social::components.page.group_users_page', compact('group')))
        ->name('admin.social.group.users');
    Route::get('/{workspace}/pages', fn(WorkspaceModel $workspace) =>
        view('social::components.page.pages_page', compact('workspace')))
        ->name('admin.social.pages');
    Route::get('/pages/{page}/followers', fn(SocialPageModel $page) =>
        view('social::components.page.page_followers_page', compact('page')))
        ->name('admin.social.pages.followers');
    Route::get('/pages/{page}/posts', fn(SocialPageModel $page) =>
        view('social::components.page.page_posts_page', compact('page')))
        ->name('admin.social.pages.posts');
    Route::get('/polls', fn(SocialPollModel $poll) =>
        view('social::components.page.polls_page', compact('poll')))
        ->name('admin.social.polls');
    Route::get('/poll/{poll}/items', fn(SocialPollItemModel $poll) =>
        view('social::components.page.poll_items_page', compact('poll')))
        ->name('admin.social.poll.items');
    Route::get('/poll/item/{item}/votes', fn(SocialPollItemModel $item) =>
        view('social::components.page.poll_item_votes_page', compact('item')))
        ->name('admin.social.poll.item.votes');
    Route::get('/user/{user}/followers', fn(User $user) =>
        view('social::components.page.user_followers_page', compact('user')))
        ->name('admin.social.user.followers');
    Route::get('/workspaces', fn() =>
        view('social::components.page.workspaces_page'))
        ->name('admin.social.workspaces');
});
