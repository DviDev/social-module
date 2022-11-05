<?php

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialGroupUserFactory;
use Modules\Social\Entities\SocialGroupUser\SocialGroupUserEntityModel;
use Modules\Social\Entities\SocialGroupUser\SocialGroupUserProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialGroupUserEntityModel toEntity()
 * @method SocialGroupUserFactory factory()
 */
class SocialGroupUserModel extends BaseModel
{
    use HasFactory;
    use SocialGroupUserProps;

    public function modelEntity(): string
    {
        return SocialGroupUserEntityModel::class;
    }

    protected static function newFactory(): SocialGroupUserFactory
    {
        return new SocialGroupUserFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_group_users', $alias);
    }
}
