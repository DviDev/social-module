<?php

namespace Modules\Social\Listeners;

use Modules\Project\Contracts\DefineSearchableAttributesContract;

class DefineSearchableSocialAttributes extends DefineSearchableAttributesContract
{
    public function searchableFields(): array
    {
        return [];
    }

    protected function moduleName(): string
    {
        return config('social.name');
    }
}
