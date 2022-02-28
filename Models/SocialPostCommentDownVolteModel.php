<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPostCommentDownVoteEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPostCommentDownVoteEntityModel toEntity()
 */
class SocialPostCommentDownVolteModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPostCommentDownVoteEntityModel::class;
    }
}
