<?php

namespace Modules\Social\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Factories\BaseFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialUserProfileFactory;
use Modules\Social\Entities\SocialUserProfile\SocialUserProfileEntityModel;
use Modules\Social\Entities\SocialUserProfile\SocialUserProfileProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialUserProfileEntityModel toEntity()
 * @method static SocialUserProfileFactory factory()
 */
class SocialUserProfileModel extends BaseModel
{
    use HasFactory;
    use SocialUserProfileProps;

    public function modelEntity(): string
    {
        return SocialUserProfileEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory {
            protected $model = SocialUserProfileModel::class;
        };
    }
    public static function table($alias = null): string
    {
        return self::dbTable('social_user_profiles', $alias);
    }

    public function getGuarded(): array
    {
        $p = SocialUserProfileEntityModel::props();
        return collect($p->toArray())->except([
            $p->id
        ])->toArray();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
