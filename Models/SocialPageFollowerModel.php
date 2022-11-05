<?php

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialPageFollowerFactory;
use Modules\Social\Entities\SocialPageFollower\SocialPageFollowerEntityModel;
use Modules\Social\Entities\SocialPageFollower\SocialPageFollowerProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPageFollowerEntityModel toEntity()
 * @method SocialPageFollowerFactory factory()
 */
class SocialPageFollowerModel extends BaseModel
{
    use HasFactory;
    use SocialPageFollowerProps;

    public function modelEntity(): string
    {
        return SocialPageFollowerEntityModel::class;
    }

    protected static function newFactory(): SocialPageFollowerFactory
    {
        return new SocialPageFollowerFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_page_followers', $alias);
    }
}
