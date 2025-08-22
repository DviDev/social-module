<?php

namespace Modules\Social\Entities\SocialPagePost;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialPagePostModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialPagePostModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
class SocialPagePostEntityModel extends BaseEntityModel
{
    use SocialPagePostProps;
}
