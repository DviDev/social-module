<?php

declare(strict_types=1);

namespace Modules\Social\Tests\Tables;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Services\Tests\BaseTest;
use Modules\Social\Models\SocialPollItemModel;

final class SocialPollItemTableTest extends BaseTest
{
    public function getModelClass(): string|BaseModel
    {
        return SocialPollItemModel::class;
    }
}
