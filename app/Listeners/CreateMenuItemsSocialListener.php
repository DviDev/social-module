<?php

namespace Modules\Social\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Project\Contracts\CreateMenuItemsListenerContract;

class CreateMenuItemsSocialListener extends CreateMenuItemsListenerContract
{
    public function moduleName(): string
    {
        return config('social.name');
    }
}
