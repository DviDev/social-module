<?php

namespace Modules\Social\Entities\SocialWorkspace;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialWorkspaceModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialWorkspaceModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
class SocialWorkspaceEntityModel extends BaseEntityModel
{
    use SocialWorkspaceProps;
}
