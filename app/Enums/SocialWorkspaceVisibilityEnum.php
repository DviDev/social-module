<?php

declare(strict_types=1);

namespace Modules\Social\Enums;

enum SocialWorkspaceVisibilityEnum
{
    case public;
    case private;

    public static function toArray(): array
    {
        return collect(self::cases())->pluck('name')->toArray();
    }
}
