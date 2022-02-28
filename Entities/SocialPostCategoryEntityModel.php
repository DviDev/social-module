<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialPostCategoryRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $name
 * @property $description
 * @method static self props($alias = null, $force = null)
 * @method SocialPostCategoryRepository repository()
 */
class SocialPostCategoryEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialPostCategoryRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_post_categories', $alias);
    }
}

