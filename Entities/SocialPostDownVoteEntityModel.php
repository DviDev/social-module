<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialPostDownVoteRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $post_id
 * @property $user_id
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SocialPostDownVoteRepository repository()
 */
class SocialPostDownVoteEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialPostDownVoteRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('post_down_votes', $alias);
    }
}

