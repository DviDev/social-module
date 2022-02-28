<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPostCommentEntityModel;
use Modules\Social\Models\SocialPostCommentModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPostCommentModel model()
 * @method SocialPostCommentEntityModel find($id)
 * @method SocialPostCommentModel first()
 * @method SocialPostCommentModel findOrNew($id)
 * @method SocialPostCommentModel firstOrNew($query)
 * @method SocialPostCommentEntityModel findOrFail($id)
 */
class SocialPostCommentRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPostCommentModel::class;
    }
}
