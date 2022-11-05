<?php

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialPollItemFactory;
use Modules\Social\Entities\SocialPollItem\SocialPollItemEntityModel;
use Modules\Social\Entities\SocialPollItem\SocialPollItemProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPollItemEntityModel toEntity()
 * @method SocialPollItemFactory factory()
 */
class SocialPollItemModel extends BaseModel
{
    use HasFactory;
    use SocialPollItemProps;

    public function modelEntity(): string
    {
        return SocialPollItemEntityModel::class;
    }

    protected static function newFactory(): SocialPollItemFactory
    {
        return new SocialPollItemFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_poll_items', $alias);
    }
}
