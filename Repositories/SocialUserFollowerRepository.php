<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialUserFollowerEntityModel;
use Modules\Social\Models\SocialUserFollowerModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialUserFollowerModel model()
 * @method SocialUserFollowerEntityModel find($id)
 * @method SocialUserFollowerModel first()
 * @method SocialUserFollowerModel findOrNew($id)
 * @method SocialUserFollowerModel firstOrNew($query)
 * @method SocialUserFollowerEntityModel findOrFail($id)
 */
class SocialUserFollowerRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialUserFollowerModel::class;
    }
}
