<?php

declare(strict_types=1);

namespace App\Domains\Market\Contracts;

use App\Domains\Fuel\Contracts\StoveFuelInterface;
use App\Domains\Market\ValueObjects\Money;

interface MarketInterface
{
    public function buyWood(Money $money): ?StoveFuelInterface;

    public function buyCoal(Money $money): ?StoveFuelInterface;

    public function buyPeat(Money $money): ?StoveFuelInterface;
}
