<?php

namespace Modules\Social\Entities\SocialGroup;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialGroupModel;
use Modules\Social\Repositories\SocialGroupRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SocialGroupModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SocialGroupRepository repository()
 */
class SocialGroupEntityModel extends BaseEntityModel
{
    use SocialGroupProps;

    protected function repositoryClass(): string
    {
        return SocialGroupRepository::class;
    }
}
