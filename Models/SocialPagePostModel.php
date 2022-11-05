<?php

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialPagePostFactory;
use Modules\Social\Entities\SocialPagePost\SocialPagePostEntityModel;
use Modules\Social\Entities\SocialPagePost\SocialPagePostProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPagePostEntityModel toEntity()
 * @method SocialPagePostFactory factory()
 */
class SocialPagePostModel extends BaseModel
{
    use HasFactory;
    use SocialPagePostProps;

    public function modelEntity(): string
    {
        return SocialPagePostEntityModel::class;
    }

    protected static function newFactory(): SocialPagePostFactory
    {
        return new SocialPagePostFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_page_posts', $alias);
    }
}
