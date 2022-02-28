<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialPollRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $description
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SocialPollRepository repository()
 */
class SocialPollEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialPollRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_polls', $alias);
    }
}

