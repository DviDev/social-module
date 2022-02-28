<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPollItemEntityModel;
use Modules\Social\Models\SocialPollItemModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPollItemModel model()
 * @method SocialPollItemEntityModel find($id)
 * @method SocialPollItemModel first()
 * @method SocialPollItemModel findOrNew($id)
 * @method SocialPollItemModel firstOrNew($query)
 * @method SocialPollItemEntityModel findOrFail($id)
 */
class SocialPollItemRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPollItemModel::class;
    }
}
