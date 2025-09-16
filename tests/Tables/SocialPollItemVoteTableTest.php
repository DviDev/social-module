<?php

namespace Modules\Social\Tests\Tables;

use Modules\Base\Contracts\BaseModel;
use Modules\Base\Services\Tests\BaseTest;
use Modules\Social\Models\SocialPollItemVoteModel;

class SocialPollItemVoteTableTest extends BaseTest
{
    public function getModelClass(): string|BaseModel
    {
        return SocialPollItemVoteModel::class;
    }
}
