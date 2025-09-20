<?php

declare(strict_types=1);

namespace Modules\Social\Listeners;

use Modules\DBMap\Domains\ScanTableDomain;

final class ScanTableSocialListener
{
    public function handle($event): void
    {
        (new ScanTableDomain)->scan('social');
    }
}
