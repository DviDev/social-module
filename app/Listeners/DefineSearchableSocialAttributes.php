<?php

declare(strict_types=1);

namespace Modules\Social\Listeners;

use Modules\Project\Contracts\DefineSearchableAttributesContract;

final class DefineSearchableSocialAttributes extends DefineSearchableAttributesContract
{
    protected function searchableFields(): array
    {
        return [];
    }

    protected function moduleName(): string
    {
        return config('social.name');
    }
}
