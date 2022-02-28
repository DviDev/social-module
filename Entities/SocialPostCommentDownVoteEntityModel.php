<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialPostCommentDownVolteRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $comment_id
 * @property $user_id
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SocialPostCommentDownVolteRepository repository()
 */
class SocialPostCommentDownVoteEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialPostCommentDownVolteRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('post_comment_down_votes', $alias);
    }
}

