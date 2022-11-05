<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPollItemVoteEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPollItemVoteEntityModel toEntity()
 */
class SocialPollItemVoteModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPollItemVoteEntityModel::class;
    }
}
