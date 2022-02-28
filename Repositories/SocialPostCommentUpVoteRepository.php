<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPostCommentUpVoteEntityModel;
use Modules\Social\Models\SocialPostCommentUpVoteModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPostCommentUpVoteModel model()
 * @method SocialPostCommentUpVoteEntityModel find($id)
 * @method SocialPostCommentUpVoteModel first()
 * @method SocialPostCommentUpVoteModel findOrNew($id)
 * @method SocialPostCommentUpVoteModel firstOrNew($query)
 * @method SocialPostCommentUpVoteEntityModel findOrFail($id)
 */
class SocialPostCommentUpVoteRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPostCommentUpVoteModel::class;
    }
}
