<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialGroupPostCommentEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialGroupPostCommentEntityModel toEntity()
 */
class SocialGroupPostCommentModel extends BaseModel
{
    function modelEntity()
    {
        return SocialGroupPostCommentEntityModel::class;
    }
}
