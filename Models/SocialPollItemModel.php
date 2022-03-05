<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPollItemEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPollItemEntityModel toEntity()
 */
class SocialPollItemModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPollItemEntityModel::class;
    }
}