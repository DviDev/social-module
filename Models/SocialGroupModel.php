<?php

namespace Modules\Social\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Base\Models\BaseModel;
use Modules\Post\Models\PostModel;
use Modules\Social\Database\Factories\SocialGroupFactory;
use Modules\Social\Entities\SocialGroup\SocialGroupEntityModel;
use Modules\Social\Entities\SocialGroup\SocialGroupProps;
use Modules\Workspace\Models\WorkspaceModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read User $user
 * @property-read WorkspaceModel $workspace
 * @method SocialGroupEntityModel toEntity()
 * @method static SocialGroupFactory factory()
 */
class SocialGroupModel extends BaseModel
{
    use HasFactory;
    use SocialGroupProps;
    use SoftDeletes;

    public function modelEntity(): string
    {
        return SocialGroupEntityModel::class;
    }

    protected static function newFactory(): SocialGroupFactory
    {
        return new SocialGroupFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_groups', $alias);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function workspace(): BelongsTo
    {
        return $this->belongsTo(WorkspaceModel::class, 'workspace_id');
    }

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(PostModel::class, SocialGroupPostModel::class, 'post_id', 'group_id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, SocialGroupUserModel::class, 'user_id', 'group_id');
    }
}
