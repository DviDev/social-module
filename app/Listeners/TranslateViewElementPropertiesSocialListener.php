<?php

namespace Modules\Social\Listeners;

use Modules\Base\Contracts\BaseTranslateViewElementPropertiesListener;

class TranslateViewElementPropertiesSocialListener extends BaseTranslateViewElementPropertiesListener
{
    protected function moduleName(): string
    {
        return config('social.name');
    }

    protected function moduleNameLower(): string
    {
        return strtolower(config('social.name'));
    }
}
