<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialFirmUserConfirmationEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialFirmUserConfirmationEntityModel toEntity()
 */
class SocialFirmUserConfirmationModel extends BaseModel
{
    function modelEntity()
    {
        return SocialFirmUserConfirmationEntityModel::class;
    }
}
