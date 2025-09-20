<?php

declare(strict_types=1);

namespace Modules\Social\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Social\Entities\SocialGroupUser\SocialGroupUserEntityModel;
use Modules\Social\Entities\SocialGroupUser\SocialGroupUserProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialGroupModel $group
 * @property-read User $user
 *
 * @method SocialGroupUserEntityModel toEntity()
 */
final class SocialGroupUserModel extends BaseModel
{
    use SocialGroupUserProps;
    use SoftDeletes;

    public static function table($alias = null): string
    {
        return self::dbTable('social_group_users', $alias);
    }

    public function modelEntity(): string
    {
        return SocialGroupUserEntityModel::class;
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(SocialGroupModel::class, 'group_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SocialGroupUserModel::class;
        };
    }
}
