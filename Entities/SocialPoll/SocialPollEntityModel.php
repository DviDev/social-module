<?php

namespace Modules\Social\Entities\SocialPoll;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialPollModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialPollModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
class SocialPollEntityModel extends BaseEntityModel
{
    use SocialPollProps;
}
