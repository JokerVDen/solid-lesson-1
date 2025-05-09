<?php

declare(strict_types=1);

namespace App\Domains\Stove\Contracts;

use App\Domains\Fuel\Contracts\StoveFuelInterface;
use App\Domains\Market\ValueObjects\Money;

interface FuelProviderInterface
{
    public function getFuel(Money $money): ?StoveFuelInterface;
}
