<?php

namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialWorkspace\SocialWorkspaceEntityModel;
use Modules\Social\Models\SocialWorkspaceModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialWorkspaceModel model()
 * @method SocialWorkspaceEntityModel find($id)
 * @method SocialWorkspaceModel first()
 * @method SocialWorkspaceModel findOrNew($id)
 * @method SocialWorkspaceModel firstOrNew($query)
 * @method SocialWorkspaceEntityModel findOrFail($id)
 */
class SocialWorkspaceRepository extends BaseRepository
{
    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialWorkspaceModel::class;
    }
}
