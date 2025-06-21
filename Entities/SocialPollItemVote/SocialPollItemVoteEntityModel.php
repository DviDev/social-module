<?php

namespace Modules\Social\Entities\SocialPollItemVote;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialPollItemVoteModel;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialPollItemVoteModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 */
class SocialPollItemVoteEntityModel extends BaseEntityModel
{
    use SocialPollItemVoteProps;
}
