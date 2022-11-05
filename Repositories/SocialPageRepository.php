<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialPage\SocialPageEntityModel;
use Modules\Social\Models\SocialPageModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialPageModel model()
 * @method SocialPageEntityModel find($id)
 * @method SocialPageModel first()
 * @method SocialPageModel findOrNew($id)
 * @method SocialPageModel firstOrNew($query)
 * @method SocialPageEntityModel findOrFail($id)
 */
class SocialPageRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialPageModel::class;
    }
}
