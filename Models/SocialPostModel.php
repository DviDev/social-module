<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPostEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPostEntityModel toEntity()
 */
class SocialPostModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPostEntityModel::class;
    }
}
