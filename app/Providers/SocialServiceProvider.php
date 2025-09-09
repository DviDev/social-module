<?php

namespace Modules\Social\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
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

class SocialServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $moduleName = 'Social';

    /**
     * @var string
     */
    protected $moduleNameLower = 'social';

    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();

        $this->registerComponents();

        $this->loadMigrationsFrom(module_path($this->moduleName, 'database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

        Event::listen(CreateMenuItemsEvent::class, CreateMenuItemsSocialListener::class);
        Event::listen(DefineSearchableAttributesEvent::class, DefineSearchableSocialAttributes::class);
        Event::listen(ScanTableEvent::class, ScanTableSocialListener::class);
        Event::listen(ElementPropertyCreatingEvent::class, TranslateViewElementPropertiesSocialListener::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleName, 'config/config.php') => config_path($this->moduleNameLower.'.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'config/config.php'), $this->moduleNameLower
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/'.$this->moduleNameLower);

        $sourcePath = module_path($this->moduleName, 'resources/views');

        $this->publishes([
            $sourcePath => $viewPath,
        ], ['views', $this->moduleNameLower.'-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/'.$this->moduleNameLower);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
            $this->loadJsonTranslationsFrom($langPath);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'lang'), $this->moduleNameLower);
            $this->loadJsonTranslationsFrom(module_path($this->moduleName, 'lang'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path.'/modules/'.$this->moduleNameLower)) {
                $paths[] = $path.'/modules/'.$this->moduleNameLower;
            }
        }

        return $paths;
    }

    protected function registerComponents(): void
    {
        \Livewire::component('social::group-post-table', SocialGroupPostTable::class);
        \Livewire::component('social::group-table', SocialGroupTable::class);
        \Livewire::component('social::group-user-table', SocialGroupUsertable::class);
        \Livewire::component('social::page-follower-table', SocialPageFollowerTable::class);
        \Livewire::component('social::page-post-table', SocialPagePostTable::class);
        \Livewire::component('social::poll-item-table', SocialPollItemTable::class);
        \Livewire::component('social::poll-item-vote-table', SocialPollItemVoteTable::class);
        \Livewire::component('social::poll-table', SocialPollTable::class);
        \Livewire::component('social::user-follower-table', SocialUserFollowerTable::class);
        \Livewire::component('social::workspace-page-table', SocialWorkspacePageTable::class);
        \Livewire::component('social::workspace--table', SocialWorkspaceTable::class);
    }
}
