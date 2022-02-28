<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPollItemDownVoteEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPollItemDownVoteEntityModel toEntity()
 */
class SocialPollItemDownVoteModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPollItemDownVoteEntityModel::class;
    }
}
