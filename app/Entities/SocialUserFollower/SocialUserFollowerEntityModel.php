<?php

namespace Modules\Social\Entities\SocialUserFollower;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialUserFollowerModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialUserFollowerModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
class SocialUserFollowerEntityModel extends BaseEntityModel
{
    use SocialUserFollowerProps;
}
