<?php

declare(strict_types=1);

namespace Modules\Social\Tests\Tables;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Contracts\BaseTest;
use Modules\Social\Models\SocialPageModel;

final class SocialPageTableTest extends BaseTest
{
    public function getModelClass(): string|BaseModel
    {
        return SocialPageModel::class;
    }
}
