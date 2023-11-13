<?php

namespace Modules\Social\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Factories\BaseFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialWorkspace\SocialWorkspaceEntityModel;
use Modules\Social\Entities\SocialWorkspace\SocialWorkspaceProps;
use Modules\Workspace\Models\WorkspaceModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialWorkspaceEntityModel toEntity()
 */
class SocialWorkspaceModel extends BaseModel
{
    use HasFactory;
    use SocialWorkspaceProps;

    public function modelEntity(): string
    {
        return SocialWorkspaceEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory {
            protected $model = SocialWorkspaceModel::class;
        };
    }
    public static function table($alias = null): string
    {
        return self::dbTable('social_workspaces', $alias);
    }

    public function workspace(): BelongsTo
    {
        return $this->belongsTo(WorkspaceModel::class, 'workspace_id');
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_user_id');
    }
}
