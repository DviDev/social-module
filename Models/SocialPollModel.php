<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPollEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPollEntityModel toEntity()
 */
class SocialPollModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPollEntityModel::class;
    }
}
