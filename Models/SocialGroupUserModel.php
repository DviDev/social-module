<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialGroupUserEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialGroupUserEntityModel toEntity()
 */
class SocialGroupUserModel extends BaseModel
{
    function modelEntity()
    {
        return SocialGroupUserEntityModel::class;
    }
}
