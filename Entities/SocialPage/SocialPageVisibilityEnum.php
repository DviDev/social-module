<?php

namespace Modules\Social\Entities\SocialPage;

enum SocialPageVisibilityEnum
{
    case public;
    case private;

    public static function toArray()
    {
        return collect(self::cases())->pluck('name')->toArray();
    }
}
