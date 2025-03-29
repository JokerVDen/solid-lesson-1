<?php

declare(strict_types=1);

namespace App\Domains\Timeline\Models;

use App\Domains\Timeline\Contracts\TimelineInterface;

class Timeline implements TimelineInterface
{
    public function goBackYears(int $years): void {}

    public function goForwardYears(int $years): void {}
}
