<?php

namespace Modules\Social\Entities\SocialPollItem;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialPollItemModel;
use Modules\Social\Repositories\SocialPollItemRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SocialPollItemModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SocialPollItemRepository repository()
 */
class SocialPollItemEntityModel extends BaseEntityModel
{
    use SocialPollItemProps;

    protected function repositoryClass(): string
    {
        return SocialPollItemRepository::class;
    }
}
