<?php

declare(strict_types=1);

namespace App\Domains\Timeline\Contracts;

interface TimelineInterface
{
    public function goBackYears(int $years): void;

    public function goForwardYears(int $years): void;
}
