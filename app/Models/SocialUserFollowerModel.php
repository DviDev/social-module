<?php

declare(strict_types=1);

namespace Modules\Social\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Social\Entities\SocialUserFollower\SocialUserFollowerEntityModel;
use Modules\Social\Entities\SocialUserFollower\SocialUserFollowerProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method SocialUserFollowerEntityModel toEntity()
 */
final class SocialUserFollowerModel extends BaseModel
{
    use SocialUserFollowerProps;

    public static function table($alias = null): string
    {
        return self::dbTable('social_followers', $alias);
    }

    public function modelEntity(): string
    {
        return SocialUserFollowerEntityModel::class;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function follower(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SocialUserFollowerModel::class;
        };
    }
}
