<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPagePostEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPagePostEntityModel toEntity()
 */
class SocialPagePostModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPagePostEntityModel::class;
    }
}
