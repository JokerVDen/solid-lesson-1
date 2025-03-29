<?php

declare(strict_types=1);

namespace App\Domains\Market\Services;

use App\Domains\Fuel\Contracts\StoveFuelInterface;
use App\Domains\Market\Contracts\MarketFuelSourceInterface;
use App\Domains\Market\Contracts\MarketInterface;
use App\Domains\Market\ValueObjects\Money;
use App\Domains\Stove\Contracts\FuelProviderInterface;

class MarketFuelProvider implements FuelProviderInterface
{
    private MarketInterface $market;

    /** @var MarketFuelSourceInterface[] */
    private array $sources;

    public function __construct(MarketInterface $market, MarketFuelSourceInterface ...$sources)
    {
        $this->market = $market;
        $this->sources = $sources;
    }

    public function getFuel(Money $money): ?StoveFuelInterface
    {
        foreach ($this->sources as $source) {
            $fuel = $source->buy($this->market, $money);

            if ($fuel !== null) {
                return $fuel;
            }
        }

        return null;
    }
}
