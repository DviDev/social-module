<?php

namespace Modules\Social\Enums;

enum SocialGroupVisibilityEnum
{
    case public;
    case private;

    public static function toArray(): array
    {
        return collect(self::cases())->pluck('name')->toArray();
    }
}
