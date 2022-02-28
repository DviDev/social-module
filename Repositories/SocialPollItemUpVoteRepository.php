<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPollItemUpVoteEntityModel;
use Modules\Social\Models\SocialPollItemUpVoteModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPollItemUpVoteModel model()
 * @method SocialPollItemUpVoteEntityModel find($id)
 * @method SocialPollItemUpVoteModel first()
 * @method SocialPollItemUpVoteModel findOrNew($id)
 * @method SocialPollItemUpVoteModel firstOrNew($query)
 * @method SocialPollItemUpVoteEntityModel findOrFail($id)
 */
class SocialPollItemUpVoteRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPollItemUpVoteModel::class;
    }
}
