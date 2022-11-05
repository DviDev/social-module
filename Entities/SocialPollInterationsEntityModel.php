<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialPollItemUpVoteRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $poll_id
 * @property $type_id
 * @property $user_id
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SocialPollItemUpVoteRepository repository()
 */
class SocialPollInterationsEntityModel extends BaseEntityModel
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
        return self::setTable('social_poll_interations', $alias);
    }
}

