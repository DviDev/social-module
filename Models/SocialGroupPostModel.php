<?php

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialGroupPostFactory;
use Modules\Social\Entities\SocialGroupPost\SocialGroupPostEntityModel;
use Modules\Social\Entities\SocialGroupPost\SocialGroupPostProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialGroupPostEntityModel toEntity()
 * @method SocialGroupPostFactory factory()
 */
class SocialGroupPostModel extends BaseModel
{
    use HasFactory;
    use SocialGroupPostProps;

    public function modelEntity(): string
    {
        return SocialGroupPostEntityModel::class;
    }

    protected static function newFactory(): SocialGroupPostFactory
    {
        return new SocialGroupPostFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_group_posts', $alias);
    }
}
