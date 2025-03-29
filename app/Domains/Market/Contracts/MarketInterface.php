<?php

declare(strict_types=1);

namespace App\Domains\Market\Contracts;

use App\Domains\Fuel\Contracts\FuelInterface;
use App\Domains\Market\ValueObjects\Money;

interface MarketInterface
{
    public function buyWood(Money $money): ?FuelInterface;

    public function buyCoal(Money $money): ?FuelInterface;

    public function buyPeat(Money $money): ?FuelInterface;
}
