<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialPollItemUpVoteRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $poll_item_id
 * @property $user_id
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SocialPollItemUpVoteRepository repository()
 */
class SocialPollItemUpVoteEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialPollItemUpVoteRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_poll_item_up_votes', $alias);
    }
}

