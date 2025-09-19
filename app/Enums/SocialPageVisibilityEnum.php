<?php

declare(strict_types=1);

namespace Modules\Social\Enums;

enum SocialPageVisibilityEnum
{
    case public;
    case private;

    public static function toArray()
    {
        return collect(self::cases())->pluck('name')->toArray();
    }
}
