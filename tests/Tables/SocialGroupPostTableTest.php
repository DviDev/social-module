<?php

declare(strict_types=1);

namespace Modules\Social\Tests\Tables;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Contracts\BaseTest;
use Modules\Social\Models\SocialGroupPostModel;

final class SocialGroupPostTableTest extends BaseTest
{
    public function getModelClass(): string|BaseModel
    {
        return SocialGroupPostModel::class;
    }
}
