<?php

namespace Modules\Social\Entities\SocialPollItem;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialPollItemModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialPollItemModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
class SocialPollItemEntityModel extends BaseEntityModel
{
    use SocialPollItemProps;
}
