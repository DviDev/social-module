<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPageEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPageEntityModel toEntity()
 */
class SocialPageModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPageEntityModel::class;
    }
}
