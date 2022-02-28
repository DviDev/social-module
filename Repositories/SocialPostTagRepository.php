<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPostTagEntityModel;
use Modules\Social\Models\SocialPostTagModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPostTagModel model()
 * @method SocialPostTagEntityModel find($id)
 * @method SocialPostTagModel first()
 * @method SocialPostTagModel findOrNew($id)
 * @method SocialPostTagModel firstOrNew($query)
 * @method SocialPostTagEntityModel findOrFail($id)
 */
class SocialPostTagRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPostTagModel::class;
    }
}
