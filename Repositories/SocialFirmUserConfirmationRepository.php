<?php
namespace Modules\Social\Repositories;

use Modules\Base\Repository\BaseRepository;
use Modules\Social\Entities\SocialFirmUserConfirmationEntityModel;
use Modules\Social\Models\SocialFirmUserConfirmationModel;

/**
 * @author Davi Menezes(davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method self obj()
 * @method SocialFirmUserConfirmationModel model()
 * @method SocialFirmUserConfirmationEntityModel find($id)
 * @method SocialFirmUserConfirmationModel first()
 * @method SocialFirmUserConfirmationModel findOrNew($id)
 * @method SocialFirmUserConfirmationModel firstOrNew($query)
 * @method SocialFirmUserConfirmationEntityModel findOrFail($id)
 */
class SocialFirmUserConfirmationRepository extends BaseRepository
{

    /**
     * @inheritDoc
     */
    public function modelClass(): string
    {
        return SocialFirmUserConfirmationModel::class;
    }
}
