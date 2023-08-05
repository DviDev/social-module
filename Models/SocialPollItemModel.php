<?php

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Base\Factories\BaseFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialPollItemFactory;
use Modules\Social\Entities\SocialPollItem\SocialPollItemEntityModel;
use Modules\Social\Entities\SocialPollItem\SocialPollItemProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPollItemEntityModel toEntity()
 * @method static SocialPollItemFactory factory()
 */
class SocialPollItemModel extends BaseModel
{
    use HasFactory;
    use SocialPollItemProps;

    public function modelEntity(): string
    {
        return SocialPollItemEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory {
            protected $model = SocialPollItemModel::class;
        };
    }
    public static function table($alias = null): string
    {
        return self::dbTable('social_poll_items', $alias);
    }

    public function poll(): BelongsTo
    {
        return $this->belongsTo(SocialPollModel::class, 'poll_id');
    }

    public function votes(): HasMany
    {
        return $this->hasMany(SocialPollItemVoteModel::class, 'item_id');
    }
}
