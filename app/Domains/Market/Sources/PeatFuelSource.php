<?php

declare(strict_types=1);

namespace App\Domains\Market\Sources;

use App\Domains\Fuel\Contracts\FuelInterface;
use App\Domains\Market\Contracts\MarketFuelSourceInterface;
use App\Domains\Market\Contracts\MarketInterface;
use App\Domains\Market\ValueObjects\Money;

class PeatFuelSource implements MarketFuelSourceInterface
{
    public function buy(MarketInterface $market, Money $money): ?FuelInterface
    {
        return $market->buyPeat($money);
    }
}
