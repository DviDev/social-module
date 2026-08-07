<?php

declare(strict_types=1);

namespace Modules\Social\Providers;

use Illuminate\Support\Facades\Event;
use Livewire;
use Modules\Base\Contracts\BaseServiceProviderContract;
use Modules\DBMap\Events\ScanTableEvent;
use Modules\Project\Events\CreateMenuItemsEvent;
use Modules\Social\Http\Livewire\SocialGroupPostTable;
use Modules\Social\Http\Livewire\SocialGroupTable;
use Modules\Social\Http\Livewire\SocialGroupUsertable;
use Modules\Social\Http\Livewire\SocialPageFollowerTable;
use Modules\Social\Http\Livewire\SocialPagePostTable;
use Modules\Social\Http\Livewire\SocialPollItemTable;
use Modules\Social\Http\Livewire\SocialPollItemVoteTable;
use Modules\Social\Http\Livewire\SocialPollTable;
use Modules\Social\Http\Livewire\SocialUserFollowerTable;
use Modules\Social\Http\Livewire\SocialWorkspacePageTable;
use Modules\Social\Http\Livewire\SocialWorkspaceTable;
use Modules\Social\Listeners\CreateMenuItemsSocialListener;
use Modules\Social\Listeners\DefineSearchableSocialAttributes;
use Modules\Social\Listeners\ScanTableSocialListener;
use Modules\Social\Listeners\TranslateViewElementPropertiesSocialListener;
use Modules\View\Events\DefineSearchableAttributesEvent;
use Modules\View\Events\ElementPropertyCreatingEvent;

final class SocialServiceProvider extends BaseServiceProviderContract
{
    public function registerEvents(): void
    {
        Event::listen(CreateMenuItemsEvent::class, CreateMenuItemsSocialListener::class);
        Event::listen(DefineSearchableAttributesEvent::class, DefineSearchableSocialAttributes::class);
        Event::listen(ScanTableEvent::class, ScanTableSocialListener::class);
        Event::listen(ElementPropertyCreatingEvent::class, TranslateViewElementPropertiesSocialListener::class);
    }

    public function provides(): array
    {
        return [
            RouteServiceProvider::class,
        ];
    }

    protected function registerComponents(): void
    {
        Livewire::component('social::group-post-table', SocialGroupPostTable::class);
        Livewire::component('social::group-table', SocialGroupTable::class);
        Livewire::component('social::group-user-table', SocialGroupUsertable::class);
        Livewire::component('social::page-follower-table', SocialPageFollowerTable::class);
        Livewire::component('social::page-post-table', SocialPagePostTable::class);
        Livewire::component('social::poll-item-table', SocialPollItemTable::class);
        Livewire::component('social::poll-item-vote-table', SocialPollItemVoteTable::class);
        Livewire::component('social::poll-table', SocialPollTable::class);
        Livewire::component('social::user-follower-table', SocialUserFollowerTable::class);
        Livewire::component('social::workspace-page-table', SocialWorkspacePageTable::class);
        Livewire::component('social::workspace--table', SocialWorkspaceTable::class);
    }

    public function getModuleName(): string
    {
        return 'Social';
    }

    public function getModuleNameLower(): string
    {
        return 'social';
    }
}
