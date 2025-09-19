<?php

declare(strict_types=1);

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Base\Contracts\BaseModel;
use Modules\Base\Factories\BaseFactory;
use Modules\Post\Models\PostModel;
use Modules\Social\Entities\SocialPagePost\SocialPagePostEntityModel;
use Modules\Social\Entities\SocialPagePost\SocialPagePostProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialPageModel $page
 * @property-read PostModel $post
 *
 * @method SocialPagePostEntityModel toEntity()
 */
final class SocialPagePostModel extends BaseModel
{
    use SocialPagePostProps;

    public static function table($alias = null): string
    {
        return self::dbTable('social_page_threads', $alias);
    }

    public function modelEntity(): string
    {
        return SocialPagePostEntityModel::class;
    }

    public function page(): BelongsTo
    {
        return $this->belongsTo(SocialPageModel::class, 'page_id');
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(PostModel::class, 'post_id');
    }

    protected static function newFactory(): BaseFactory
    {
        return new class extends BaseFactory
        {
            protected $model = SocialPagePostModel::class;
        };
    }
}
