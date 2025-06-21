<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialGroupUser\SocialGroupUserEntityModel;
use Modules\Social\Models\SocialGroupUserModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method self obj()
 * @method SocialGroupUserModel model()
 * @method SocialGroupUserEntityModel find($id)
 * @method SocialGroupUserModel first()
 * @method SocialGroupUserModel findOrNew($id)
 * @method SocialGroupUserModel firstOrNew($query)
 * @method SocialGroupUserEntityModel findOrFail($id)
 */
class SocialGroupUserRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return SocialGroupUserModel::class;
    }
}
