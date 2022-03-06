<?php
namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialFirmUserEntityModel;
use Modules\Social\Models\SocialFirmUserModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialFirmUserModel model()
 * @method SocialFirmUserEntityModel find($id)
 * @method SocialFirmUserModel first()
 * @method SocialFirmUserModel findOrNew($id)
 * @method SocialFirmUserModel firstOrNew($query)
 * @method SocialFirmUserEntityModel findOrFail($id)
 */
class SocialFirmUserRepository extends BaseRepository
{

    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialFirmUserModel::class;
    }
}
