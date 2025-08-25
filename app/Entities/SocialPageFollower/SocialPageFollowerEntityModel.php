<?php

namespace Modules\Social\Entities\SocialPageFollower;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialPageFollowerModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialPageFollowerModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
class SocialPageFollowerEntityModel extends BaseEntityModel
{
    use SocialPageFollowerProps;
}
