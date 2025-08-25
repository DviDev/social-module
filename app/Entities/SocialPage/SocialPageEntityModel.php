<?php

namespace Modules\Social\Entities\SocialPage;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialPageModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialPageModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
class SocialPageEntityModel extends BaseEntityModel
{
    use SocialPageProps;
}
