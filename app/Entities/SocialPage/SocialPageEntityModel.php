<?php

declare(strict_types=1);

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
final class SocialPageEntityModel extends BaseEntityModel
{
    use SocialPageProps;
}
