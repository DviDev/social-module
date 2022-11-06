<?php

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialGroupFactory;
use Modules\Social\Entities\SocialGroup\SocialGroupEntityModel;
use Modules\Social\Entities\SocialGroup\SocialGroupProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialGroupEntityModel toEntity()
 * @method SocialGroupFactory factory()
 */
class SocialGroupModel extends BaseModel
{
    use HasFactory;
    use SocialGroupProps;
    use SoftDeletes;

    public function modelEntity(): string
    {
        return SocialGroupEntityModel::class;
    }

    protected static function newFactory(): SocialGroupFactory
    {
        return new SocialGroupFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_groups', $alias);
    }
}
