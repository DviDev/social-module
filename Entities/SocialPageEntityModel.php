<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialPageRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $workspace_id
 * @property $created_by_user_id
 * @property $visibility
 * @property $name
 * @property $image_cover_path
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SocialPageRepository repository()
 */
class SocialPageEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialPageRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_pages', $alias);
    }
}

