<?php

namespace Modules\Social\Models;

use Modules\Base\Models\BaseModel;
use Modules\Social\Entities\SocialPostDownVoteEntityModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPostDownVoteEntityModel toEntity()
 */
class SocialPostDownVoteModel extends BaseModel
{
    function modelEntity()
    {
        return SocialPostDownVoteEntityModel::class;
    }
}
