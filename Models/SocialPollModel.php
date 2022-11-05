<?php

namespace Modules\Social\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Base\Models\BaseModel;
use Modules\Social\Database\Factories\SocialPollFactory;
use Modules\Social\Entities\SocialPoll\SocialPollEntityModel;
use Modules\Social\Entities\SocialPoll\SocialPollProps;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @method SocialPollEntityModel toEntity()
 * @method SocialPollFactory factory()
 */
class SocialPollModel extends BaseModel
{
    use HasFactory;
    use SocialPollProps;

    public function modelEntity(): string
    {
        return SocialPollEntityModel::class;
    }

    protected static function newFactory(): SocialPollFactory
    {
        return new SocialPollFactory();
    }

    public static function table($alias = null): string
    {
        return self::dbTable('social_polls', $alias);
    }
}
