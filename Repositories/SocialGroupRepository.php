<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialGroup\SocialGroupEntityModel;
use Modules\Social\Models\SocialGroupModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method self obj()
 * @method SocialGroupModel model()
 * @method SocialGroupEntityModel find($id)
 * @method SocialGroupModel first()
 * @method SocialGroupModel findOrNew($id)
 * @method SocialGroupModel firstOrNew($query)
 * @method SocialGroupEntityModel findOrFail($id)
 */
class SocialGroupRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return SocialGroupModel::class;
    }
}
