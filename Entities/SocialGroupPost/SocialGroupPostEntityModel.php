<?php

namespace Modules\Social\Entities\SocialGroupPost;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Social\Models\SocialGroupPostModel;
use Modules\Social\Repositories\SocialGroupPostRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property-read SocialGroupPostModel $model
 * @method self save()
 * @method static self new()
 * @method static self props($alias = null, $force = null)
 * @method SocialGroupPostRepository repository()
 */
class SocialGroupPostEntityModel extends BaseEntityModel
{
    use SocialGroupPostProps;

    protected function repositoryClass(): string
    {
        return SocialGroupPostRepository::class;
    }
}
