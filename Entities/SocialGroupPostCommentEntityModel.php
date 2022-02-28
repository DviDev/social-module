<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialGroupPostCommentRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $group_post_id
 * @property $comment
 * @property $user_id
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SocialGroupPostCommentRepository repository()
 */
class SocialGroupPostCommentEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialGroupPostCommentRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_group_post_comments', $alias);
    }
}
