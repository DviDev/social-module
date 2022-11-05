<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialUserFollowerEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialUserFollowerEntityModel toEntity()
 */
class SocialUserFollowerModel extends BaseModel
{
    function modelEntity()
    {
        return SocialUserFollowerEntityModel::class;
    }
}
