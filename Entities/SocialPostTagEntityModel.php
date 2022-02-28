<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialPostTagRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $post_id
 * @property $tag
 * @method static self props($alias = null, $force = null)
 * @method SocialPostTagRepository repository()
 */
class SocialPostTagEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialPostTagRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_post_tags', $alias);
    }
}

