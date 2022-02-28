<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPostCommentEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPostCommentEntityModel toEntity()
 */
class SocialPostCommentModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPostCommentEntityModel::class;
    }
}
