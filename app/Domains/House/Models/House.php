<?php

declare(strict_types=1);

namespace App\Domains\House\Models;

use App\Domains\Fuel\Services\FuelService;
use App\Domains\Market\ValueObjects\Money;
use App\Domains\Stove\Contracts\StoveInterface;

class House
{
    private FuelService $fuelService;

    private StoveInterface $stove;

    public function __construct(FuelService $fuelService, StoveInterface $stove)
    {
        $this->fuelService = $fuelService;
        $this->stove = $stove;
    }

    public function heatTheHouse(Money $money): void
    {
        $fuel = $this->fuelService->provideFuel($money);

        $this->stove->useStove($fuel);
    }
}
