<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialGroupEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialGroupEntityModel toEntity()
 */
class SocialGroupModel extends BaseModel
{
    function modelEntity()
    {
        return SocialGroupEntityModel::class;
    }
}
