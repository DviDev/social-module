<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialFirmUserConfirmationRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $social_firm_user_id
 * @property $hash
 * @property $confirmed_at
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SocialFirmUserConfirmationRepository repository()
 */
class SocialFirmUserConfirmationEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialFirmUserConfirmationRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_firm_user_confirmations', $alias);
    }
}
