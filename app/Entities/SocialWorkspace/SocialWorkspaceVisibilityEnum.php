<?php

namespace Modules\Social\Entities\SocialWorkspace;

enum SocialWorkspaceVisibilityEnum
{
    case public;
    case private;

    public static function toArray(): array
    {
        return collect(self::cases())->pluck('name')->toArray();
    }
}
