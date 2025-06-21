<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPagePost\SocialPagePostEntityModel;
use Modules\Social\Models\SocialPagePostModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method self obj()
 * @method SocialPagePostModel model()
 * @method SocialPagePostEntityModel find($id)
 * @method SocialPagePostModel first()
 * @method SocialPagePostModel findOrNew($id)
 * @method SocialPagePostModel firstOrNew($query)
 * @method SocialPagePostEntityModel findOrFail($id)
 */
class SocialPagePostRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return SocialPagePostModel::class;
    }
}
