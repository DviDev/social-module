<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPollItemVoteEntityModel;
use Modules\Social\Models\SocialPollItemVoteModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPollItemVoteModel model()
 * @method SocialPollItemVoteEntityModel find($id)
 * @method SocialPollItemVoteModel first()
 * @method SocialPollItemVoteModel findOrNew($id)
 * @method SocialPollItemVoteModel firstOrNew($query)
 * @method SocialPollItemVoteEntityModel findOrFail($id)
 */
class SocialPollItemVoteRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPollItemVoteModel::class;
    }
}
