<?php

namespace Modules\Social\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialPageFactory;
use Modules\Social\Entities\SocialPage\SocialPageEntityModel;
use Modules\Social\Entities\SocialPage\SocialPageProps;
use Modules\Workspace\Models\WorkspaceModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read User $user
 * @property-read WorkspaceModel $workspace
 * @method SocialPageEntityModel toEntity()
 * @method static SocialPageFactory factory()
 */
class SocialPageModel extends BaseModel
{
    use HasFactory;
    use SocialPageProps;
    use SoftDeletes;

    public function modelEntity(): string
    {
        return SocialPageEntityModel::class;
    }

    protected static function newFactory(): SocialPageFactory
    {
        return new SocialPageFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_pages', $alias);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function workspace(): BelongsTo
    {
        return $this->belongsTo(WorkspaceModel::class, 'workspace_id');
    }
}
