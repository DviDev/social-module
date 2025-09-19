<?php

declare(strict_types=1);

namespace Modules\Social\Tests\Tables;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Services\Tests\BaseTest;
use Modules\Social\Models\SocialUserProfileModel;

final class SocialUserProfileTableTest extends BaseTest
{
    public function getModelClass(): string|BaseModel
    {
        return SocialUserProfileModel::class;
    }
}
