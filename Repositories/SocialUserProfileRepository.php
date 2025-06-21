<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialUserProfile\SocialUserProfileEntityModel;
use Modules\Social\Models\SocialUserProfileModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @method self obj()
 * @method SocialUserProfileModel model()
 * @method SocialUserProfileEntityModel find($id)
 * @method SocialUserProfileModel first()
 * @method SocialUserProfileModel findOrNew($id)
 * @method SocialUserProfileModel firstOrNew($query)
 * @method SocialUserProfileEntityModel findOrFail($id)
 */
class SocialUserProfileRepository extends BaseRepository
{
    /**
     * {@inheritDoc}
     */
    public function modelClass(): string
    {
        return SocialUserProfileModel::class;
    }
}
