<?php

declare(strict_types=1);

use App\Domains\Forest\Models\Forest;
use App\Domains\Forest\Services\ForestFuelProvider;
use App\Domains\Fuel\Services\FuelService;
use App\Domains\House\Models\House;
use App\Domains\Market\Models\Market;
use App\Domains\Market\Services\MarketFuelProvider;
use App\Domains\Market\Sources\CoalFuelSource;
use App\Domains\Market\Sources\PeatFuelSource;
use App\Domains\Market\Sources\WoodFuelSource;
use App\Domains\Market\ValueObjects\Money;
use App\Domains\Stove\Models\Stove;
use App\Domains\Timeline\Models\Timeline;

require __DIR__ . '/vendor/autoload.php';

$timeline = new Timeline();
$market = new Market();
$forest = new Forest();
$stove = new Stove();
$money = new Money();

$fuelService = new FuelService(
    new MarketFuelProvider(
        $market,
        new WoodFuelSource(),
        new CoalFuelSource(),
        new PeatFuelSource()
    ),
    new ForestFuelProvider($timeline, $forest)
);

$house = new House($fuelService, $stove);
$house->heatTheHouse($money);
