<?php

namespace Modules\Social\Listeners;

use Modules\DBMap\Domains\ScanTableDomain;

class ScanTableSocialListener
{
    public function handle($event): void
    {
        new ScanTableDomain()->scan('social');
    }
}
