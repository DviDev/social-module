<?php

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialPageFactory;
use Modules\Social\Entities\SocialPage\SocialPageEntityModel;
use Modules\Social\Entities\SocialPage\SocialPageProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPageEntityModel toEntity()
 * @method SocialPageFactory factory()
 */
class SocialPageModel extends BaseModel
{
    use HasFactory;
    use SocialPageProps;
    use SoftDeletes;

    public function modelEntity(): string
    {
        return SocialPageEntityModel::class;
    }

    protected static function newFactory(): SocialPageFactory
    {
        return new SocialPageFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_pages', $alias);
    }
}
