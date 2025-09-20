<?php

declare(strict_types=1);

namespace Modules\Social\Entities\SocialGroup;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialGroupModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialGroupModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
final class SocialGroupEntityModel extends BaseEntityModel
{
    use SocialGroupProps;
}
