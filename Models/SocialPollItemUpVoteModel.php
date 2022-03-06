<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPollItemUpVoteEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPollItemUpVoteEntityModel toEntity()
 */
class SocialPollItemUpVoteModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPollItemUpVoteEntityModel::class;
    }
}
