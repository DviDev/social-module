<?php

namespace Modules\Social\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Factories\BaseFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialPollItemVoteFactory;
use Modules\Social\Entities\SocialPollItemVote\SocialPollItemVoteEntityModel;
use Modules\Social\Entities\SocialPollItemVote\SocialPollItemVoteProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPollItemVoteEntityModel toEntity()
 * @method static SocialPollItemVoteFactory factory()
 */
class SocialPollItemVoteModel extends BaseModel
{
    use HasFactory;
    use SocialPollItemVoteProps;

    public function modelEntity(): string
    {
        return SocialPollItemVoteEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory {
            protected $model = SocialPollItemVoteModel::class;
        };
    }
    public static function table($alias = null): string
    {
        return self::dbTable('social_poll_item_votes', $alias);
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(SocialPollItemModel::class, 'item_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
