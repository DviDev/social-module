<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPollEntityModel;
use Modules\Social\Models\SocialPollModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPollModel model()
 * @method SocialPollEntityModel find($id)
 * @method SocialPollModel first()
 * @method SocialPollModel findOrNew($id)
 * @method SocialPollModel firstOrNew($query)
 * @method SocialPollEntityModel findOrFail($id)
 */
class SocialPollRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPollModel::class;
    }
}
