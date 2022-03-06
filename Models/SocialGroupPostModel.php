<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialGroupPostEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialGroupPostEntityModel toEntity()
 */
class SocialGroupPostModel extends BaseModel
{
    function modelEntity()
    {
        return SocialGroupPostEntityModel::class;
    }
}
