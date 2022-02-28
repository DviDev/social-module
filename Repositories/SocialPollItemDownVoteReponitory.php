<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPollItemDownVoteEntityModel;
use Modules\Social\Models\SocialPollItemDownVoteModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPollItemDownVoteModel model()
 * @method SocialPollItemDownVoteEntityModel find($id)
 * @method SocialPollItemDownVoteModel first()
 * @method SocialPollItemDownVoteModel findOrNew($id)
 * @method SocialPollItemDownVoteModel firstOrNew($query)
 * @method SocialPollItemDownVoteEntityModel findOrFail($id)
 */
class SocialPollItemDownVoteRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPollItemDownVoteModel::class;
    }
}
