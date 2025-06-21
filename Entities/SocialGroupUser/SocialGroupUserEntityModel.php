<?php

namespace Modules\Social\Entities\SocialGroupUser;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialGroupUserModel;
use Modules\Social\Repositories\SocialGroupUserRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 *
 * @link https://github.com/DaviMenezes
 *
 * @property-read SocialGroupUserModel $model
 *
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SocialGroupUserRepository repository()
 */
class SocialGroupUserEntityModel extends BaseEntityModel
{
    use SocialGroupUserProps;

    protected function repositoryClass(): string
    {
        return SocialGroupUserRepository::class;
    }
}
