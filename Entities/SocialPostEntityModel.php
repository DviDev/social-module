<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialPostRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $user_id
 * @property $category_id
 * @property $title
 * @property $content
 * @property $thumbnail_image_path
 * @property $poll_id
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SocialPostRepository repository()
 */
class SocialPostEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialPostRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_posts', $alias);
    }
}

