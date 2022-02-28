<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPostCommentUpVoteEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPostCommentUpVoteEntityModel toEntity()
 */
class SocialPostCommentUpVoteModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPostCommentUpVoteEntityModel::class;
    }
}
