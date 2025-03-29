<?php

declare(strict_types=1);

namespace App\Domains\Market\Contracts;

use App\Domains\Fuel\Contracts\StoveFuelInterface;
use App\Domains\Market\ValueObjects\Money;

interface MarketFuelSourceInterface
{
    public function buy(MarketInterface $market, Money $money): ?StoveFuelInterface;
}
