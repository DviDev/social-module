<?php

namespace Modules\Social\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Factories\BaseFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialUserFollowerFactory;
use Modules\Social\Entities\SocialUserFollower\SocialUserFollowerEntityModel;
use Modules\Social\Entities\SocialUserFollower\SocialUserFollowerProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialUserFollowerEntityModel toEntity()
 * @method static SocialUserFollowerFactory factory()
 */
class SocialUserFollowerModel extends BaseModel
{
    use HasFactory;
    use SocialUserFollowerProps;

    public function modelEntity(): string
    {
        return SocialUserFollowerEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory {
            protected $model = SocialUserFollowerModel::class;
        };
    }
    public static function table($alias = null): string
    {
        return self::dbTable('social_user_followers', $alias);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function follower(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
