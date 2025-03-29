<?php

declare(strict_types=1);

namespace App\Domains\Market\Models;

use App\Domains\Fuel\Contracts\StoveFuelInterface;
use App\Domains\Market\Contracts\MarketInterface;
use App\Domains\Market\ValueObjects\Money;

class Market implements MarketInterface
{
    public function buyWood(Money $money): ?StoveFuelInterface
    {
        return new class implements StoveFuelInterface {
        };
    }

    public function buyCoal(Money $money): ?StoveFuelInterface
    {
        return new class implements StoveFuelInterface {
        };
    }

    public function buyPeat(Money $money): ?StoveFuelInterface
    {
        return new class implements StoveFuelInterface {
        };
    }
}
