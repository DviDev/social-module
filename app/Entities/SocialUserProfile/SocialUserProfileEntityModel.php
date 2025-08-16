<?php

namespace Modules\Social\Entities\SocialUserProfile;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialUserProfileModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialUserProfileModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
class SocialUserProfileEntityModel extends BaseEntityModel
{
    use SocialUserProfileProps;
}
