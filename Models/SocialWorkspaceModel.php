<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialWorkspaceEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialWorkspaceEntityModel toEntity()
 */
class SocialWorkspaceModel extends BaseModel
{
    function modelEntity()
    {
        return SocialWorkspaceEntityModel::class;
    }
}
