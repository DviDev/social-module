<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialPagePostRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $page_id
 * @property $post_id
 * @method static self props($alias = null, $force = null)
 * @method SocialPagePostRepository repository()
 */
class SocialPagePostEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialPagePostRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_page_posts', $alias);
    }
}

