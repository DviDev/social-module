<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialGroupPostRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $group_id
 * @property $post_id
 * @method static self props($alias = null, $force = null)
 * @method SocialGroupPostRepository repository()
 */
class SocialGroupPostEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialGroupPostRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_group_posts', $alias);
    }
}
