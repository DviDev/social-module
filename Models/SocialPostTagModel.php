<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPostTagEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPostTagEntityModel toEntity()
 */
class SocialPostTagModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPostTagEntityModel::class;
    }
}
