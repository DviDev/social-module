<?php

namespace Modules\Social\Listeners;

use Modules\Project\Contracts\CreateMenuItemsListenerContract;

class CreateMenuItemsSocialListener extends CreateMenuItemsListenerContract
{
    public function moduleName(): string
    {
        return config('social.name');
    }
}
