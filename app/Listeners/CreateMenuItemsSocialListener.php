<?php

namespace Modules\Social\Listeners;

use Modules\Project\Contracts\CreateMenuItemsListenerContract;

class CreateMenuItemsSocialListener extends CreateMenuItemsListenerContract
{
    protected function moduleName(): string
    {
        return config('social.name');
    }
}
