<?php

declare(strict_types=1);

namespace Modules\Social\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Post\Models\PostModel;
use Modules\Social\Entities\SocialPage\SocialPageEntityModel;
use Modules\Social\Entities\SocialPage\SocialPageProps;
use Modules\Workspace\Models\WorkspaceModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read User $user
 * @property-read WorkspaceModel $workspace
 *
 * @method SocialPageEntityModel toEntity()
 */
final class SocialPageModel extends BaseModel
{
    use SocialPageProps;
    use SoftDeletes;

    public static function table($alias = null): string
    {
        return self::dbTable('social_pages', $alias);
    }

    public function modelEntity(): string
    {
        return SocialPageEntityModel::class;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function workspace(): BelongsTo
    {
        return $this->belongsTo(WorkspaceModel::class, 'workspace_id');
    }

    public function followers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, SocialPageFollowerModel::class, 'page_id', 'user_id');
    }

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(PostModel::class, SocialPagePostModel::class, 'page_id', 'post_id');
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SocialPageModel::class;
        };
    }
}
