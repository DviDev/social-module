<?php

namespace Modules\Social\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialGroupUserFactory;
use Modules\Social\Entities\SocialGroupUser\SocialGroupUserEntityModel;
use Modules\Social\Entities\SocialGroupUser\SocialGroupUserProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SocialGroupModel $group
 * @property-read User $user
 * @method SocialGroupUserEntityModel toEntity()
 * @method static SocialGroupUserFactory factory()
 */
class SocialGroupUserModel extends BaseModel
{
    use HasFactory;
    use SocialGroupUserProps;
    use SoftDeletes;

    public function modelEntity(): string
    {
        return SocialGroupUserEntityModel::class;
    }

    protected static function newFactory(): SocialGroupUserFactory
    {
        return new SocialGroupUserFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_group_users', $alias);
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(SocialGroupModel::class, 'group_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
