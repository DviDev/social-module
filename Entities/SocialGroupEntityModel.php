<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialGroupRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $workspace_id
 * @property $visibility
 * @property $name
 * @property $cover_image_path
 * @method static self props($alias = null, $force = null)
 * @method SocialGroupRepository repository()
 */
class SocialGroupEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialGroupRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_group', $alias);
    }
}
