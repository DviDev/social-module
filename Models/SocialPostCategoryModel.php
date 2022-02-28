<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPostCategoryEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPostCategoryEntityModel toEntity()
 */
class SocialPostCategoryModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPostCategoryEntityModel::class;
    }
}
