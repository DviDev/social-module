<?php

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialUserFollowerFactory;
use Modules\Social\Entities\SocialUserFollower\SocialUserFollowerEntityModel;
use Modules\Social\Entities\SocialUserFollower\SocialUserFollowerProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialUserFollowerEntityModel toEntity()
 * @method SocialUserFollowerFactory factory()
 */
class SocialUserFollowerModel extends BaseModel
{
    use HasFactory;
    use SocialUserFollowerProps;

    public function modelEntity(): string
    {
        return SocialUserFollowerEntityModel::class;
    }

    protected static function newFactory(): SocialUserFollowerFactory
    {
        return new SocialUserFollowerFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_user_followers', $alias);
    }
}
