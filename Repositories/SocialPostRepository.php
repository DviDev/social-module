<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPostEntityModel;
use Modules\Social\Models\SocialPostModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPostModel model()
 * @method SocialPostEntityModel find($id)
 * @method SocialPostModel first()
 * @method SocialPostModel findOrNew($id)
 * @method SocialPostModel firstOrNew($query)
 * @method SocialPostEntityModel findOrFail($id)
 */
class SocialPostRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPostModel::class;
    }
}
