<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPageFollowerEntityModel;
use Modules\Social\Models\SocialPageFollowerModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPageFollowerModel model()
 * @method SocialPageFollowerEntityModel find($id)
 * @method SocialPageFollowerModel first()
 * @method SocialPageFollowerModel findOrNew($id)
 * @method SocialPageFollowerModel firstOrNew($query)
 * @method SocialPageFollowerEntityModel findOrFail($id)
 */
class SocialPageFollowerRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPageFollowerModel::class;
    }
}
