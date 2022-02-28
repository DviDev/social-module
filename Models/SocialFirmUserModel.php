<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialFirmUserEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialFirmUserEntityModel toEntity()
 */
class SocialFirmUserModel extends BaseModel
{
    function modelEntity()
    {
        return SocialFirmUserEntityModel::class;
    }
}
