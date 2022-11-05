<?php

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialWorkspaceFactory;
use Modules\Social\Entities\SocialWorkspace\SocialWorkspaceEntityModel;
use Modules\Social\Entities\SocialWorkspace\SocialWorkspaceProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialWorkspaceEntityModel toEntity()
 * @method SocialWorkspaceFactory factory()
 */
class SocialWorkspaceModel extends BaseModel
{
    use HasFactory;
    use SocialWorkspaceProps;

    public function modelEntity(): string
    {
        return SocialWorkspaceEntityModel::class;
    }

    protected static function newFactory(): SocialWorkspaceFactory
    {
        return new SocialWorkspaceFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_workspaces', $alias);
    }
}
