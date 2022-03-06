<?php

namespace Modules\Social\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Repositories\SocialUserFollowerRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $user_id
 * @property $follower_id
 * @property $notification_enabled
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SocialUserFollowerRepository repository()
 */
class SocialUserFollowerEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SocialUserFollowerRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('social_user_followers', $alias);
    }
}

