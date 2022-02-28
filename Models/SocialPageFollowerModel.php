<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPageFollowerEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPageFollowerEntityModel toEntity()
 */
class SocialPageFollowerModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPageFollowerEntityModel::class;
    }
}
