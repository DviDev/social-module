<?php

namespace Modules\Social\Tests\Tables;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Services\Tests\BaseTest;
use Modules\Social\Models\SocialPollModel;

class SocialPollTableTest extends BaseTest
{
    public function getModelClass(): string|BaseModel
    {
        return SocialPollModel::class;
    }
}
