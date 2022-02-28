<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPostCategoryEntityModel;
use Modules\Social\Models\SocialPostCategoryModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPostCategoryModel model()
 * @method SocialPostCategoryEntityModel find($id)
 * @method SocialPostCategoryModel first()
 * @method SocialPostCategoryModel findOrNew($id)
 * @method SocialPostCategoryModel firstOrNew($query)
 * @method SocialPostCategoryEntityModel findOrFail($id)
 */
class SocialPostCategoryRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPostCategoryModel::class;
    }
}
