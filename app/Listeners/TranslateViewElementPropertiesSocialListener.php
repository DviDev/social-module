<?php

declare(strict_types=1);

namespace Modules\Social\Listeners;

use Modules\Base\Contracts\BaseTranslateViewElementPropertiesListener;

final class TranslateViewElementPropertiesSocialListener extends BaseTranslateViewElementPropertiesListener
{
    protected function moduleName(): string
    {
        return config('social.name');
    }

    protected function moduleNameLower(): string
    {
        return mb_strtolower(config('social.name'));
    }
}
