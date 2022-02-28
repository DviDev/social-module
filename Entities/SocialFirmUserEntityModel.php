<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialFirmUserRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $firm_id
 * @property $user_id
 * @property $active
 * @property $owner_id
 * @method static self props($alias = null, $force = null)
 * @method SocialFirmUserRepository repository()
 */
class SocialFirmUserEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialFirmUserRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_firm_users', $alias);
    }
}
