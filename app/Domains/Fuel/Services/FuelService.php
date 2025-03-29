<?php

declare(strict_types=1);

namespace App\Domains\Fuel\Services;

use App\Domains\Fuel\Contracts\FuelInterface;
use App\Domains\Market\ValueObjects\Money;
use App\Domains\Stove\Contracts\FuelProviderInterface;
use RuntimeException;

class FuelService
{
    /** @var FuelProviderInterface[] */
    private array $providers;

    public function __construct(FuelProviderInterface ...$providers)
    {
        $this->providers = $providers;
    }

    public function provideFuel(Money $money): FuelInterface
    {
        foreach ($this->providers as $provider) {
            $fuel = $provider->getFuel($money);

            if ($fuel !== null) {
                return $fuel;
            }
        }

        throw new RuntimeException('Fuel not found');
    }
}
