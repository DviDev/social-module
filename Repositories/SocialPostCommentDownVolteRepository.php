<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPostCommentDownVoteEntityModel;
use Modules\Social\Models\SocialPostCommentDownVolteModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPostCommentDownVolteModel model()
 * @method SocialPostCommentDownVoteEntityModel find($id)
 * @method SocialPostCommentDownVolteModel first()
 * @method SocialPostCommentDownVolteModel findOrNew($id)
 * @method SocialPostCommentDownVolteModel firstOrNew($query)
 * @method SocialPostCommentDownVoteEntityModel findOrFail($id)
 */
class SocialPostCommentDownVolteRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPostCommentDownVolteModel::class;
    }
}
