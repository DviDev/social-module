<?php

declare(strict_types=1);

namespace Modules\Social\Listeners;

use Modules\Project\Contracts\CreateMenuItemsListenerContract;

final class CreateMenuItemsSocialListener extends CreateMenuItemsListenerContract
{
    protected function moduleName(): string
    {
        return config('social.name');
    }
}
