<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPollInterationsEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPollInterationsEntityModel toEntity()
 */
class SocialPollItemUpVoteModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPollInterationsEntityModel::class;
    }
}
