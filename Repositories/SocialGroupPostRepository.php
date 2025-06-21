<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialGroupPost\SocialGroupPostEntityModel;
use Modules\Social\Models\SocialGroupPostModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method self obj()
 * @method SocialGroupPostModel model()
 * @method SocialGroupPostEntityModel find($id)
 * @method SocialGroupPostModel first()
 * @method SocialGroupPostModel findOrNew($id)
 * @method SocialGroupPostModel firstOrNew($query)
 * @method SocialGroupPostEntityModel findOrFail($id)
 */
class SocialGroupPostRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return SocialGroupPostModel::class;
    }
}
