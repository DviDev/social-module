<?php

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Post\Models\PostModel;
use Modules\Social\Entities\SocialGroupPost\SocialGroupPostEntityModel;
use Modules\Social\Entities\SocialGroupPost\SocialGroupPostProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialGroupModel $group
 * @property-read PostModel $post
 *
 * @method SocialGroupPostEntityModel toEntity()
 */
class SocialGroupPostModel extends BaseModel
{
    use HasFactory;
    use SocialGroupPostProps;

    public function modelEntity(): string
    {
        return SocialGroupPostEntityModel::class;
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SocialGroupPostModel::class;
        };
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_group_posts', $alias);
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(SocialGroupModel::class, 'group_id');
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(PostModel::class, 'post_id');
    }
}
