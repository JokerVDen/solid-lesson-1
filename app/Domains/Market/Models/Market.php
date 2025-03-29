<?php

declare(strict_types=1);

namespace App\Domains\Market\Models;

use App\Domains\Fuel\Contracts\FuelInterface;
use App\Domains\Market\Contracts\MarketInterface;
use App\Domains\Market\ValueObjects\Money;

class Market implements MarketInterface
{
    public function buyWood(Money $money): ?FuelInterface
    {
        return new class implements FuelInterface {
        };
    }

    public function buyCoal(Money $money): ?FuelInterface
    {
        return new class implements FuelInterface {
        };
    }

    public function buyPeat(Money $money): ?FuelInterface
    {
        return new class implements FuelInterface {
        };
    }
}
