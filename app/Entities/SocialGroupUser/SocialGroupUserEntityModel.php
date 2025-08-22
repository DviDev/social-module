<?php

namespace Modules\Social\Entities\SocialGroupUser;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialGroupUserModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialGroupUserModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
class SocialGroupUserEntityModel extends BaseEntityModel
{
    use SocialGroupUserProps;
}
