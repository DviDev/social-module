<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialGroupPostCommentEntityModel;
use Modules\Social\Models\SocialGroupPostCommentModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialGroupPostCommentModel model()
 * @method SocialGroupPostCommentEntityModel find($id)
 * @method SocialGroupPostCommentModel first()
 * @method SocialGroupPostCommentModel findOrNew($id)
 * @method SocialGroupPostCommentModel firstOrNew($query)
 * @method SocialGroupPostCommentEntityModel findOrFail($id)
 */
class SocialGroupPostCommentRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialGroupPostCommentModel::class;
    }
}
