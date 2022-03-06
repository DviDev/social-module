<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialPollItemRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $poll_id
 * @property $name
 * @method static self props($alias = null, $force = null)
 * @method SocialPollItemRepository repository()
 */
class SocialPollItemEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialPollItemRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_poll_items', $alias);
    }
}

