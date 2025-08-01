<?php

namespace Modules\Social\Providers;

use Illuminate\Support\ServiceProvider;
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
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
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

        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower.'.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower
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

        $sourcePath = module_path($this->moduleName, 'Resources/views');

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
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
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
}
