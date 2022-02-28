<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialWorkspaceRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $name
 * @property $visibility
 * @property $owner_user_id
 * @method static self props($alias = null, $force = null)
 * @method SocialWorkspaceRepository repository()
 */
class SocialWorkspaceEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialWorkspaceRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_workspaces', $alias);
    }
}

