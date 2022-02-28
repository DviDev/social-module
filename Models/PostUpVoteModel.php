<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPostUpVoteEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPostUpVoteEntityModel toEntity()
 */
class PostUpVoteModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPostUpVoteEntityModel::class;
    }
}
