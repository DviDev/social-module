<?php

namespace Modules\Social\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Factories\BaseFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPageFollower\SocialPageFollowerEntityModel;
use Modules\Social\Entities\SocialPageFollower\SocialPageFollowerProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SocialPageModel $page
 * @property-read User $user
 * @method SocialPageFollowerEntityModel toEntity()
 */
class SocialPageFollowerModel extends BaseModel
{
    use HasFactory;
    use SocialPageFollowerProps;

    public function modelEntity(): string
    {
        return SocialPageFollowerEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory {
            protected $model = SocialPageFollowerModel::class;
        };
    }
    public static function table($alias = null): string
    {
        return self::dbTable('social_page_followers', $alias);
    }

    public function page(): BelongsTo
    {
        return $this->belongsTo(SocialPageModel::class, 'page_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
