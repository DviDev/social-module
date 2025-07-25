<?php

namespace Modules\Social\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Base\Factories\BaseFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPoll\SocialPollEntityModel;
use Modules\Social\Entities\SocialPoll\SocialPollProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method SocialPollEntityModel toEntity()
 */
class SocialPollModel extends BaseModel
{
    use HasFactory;
    use SocialPollProps;

    public function modelEntity(): string
    {
        return SocialPollEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SocialPollModel::class;
        };
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_polls', $alias);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(SocialPollItemModel::class, 'poll_id');
    }
}
