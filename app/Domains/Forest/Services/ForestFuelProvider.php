<?php

declare(strict_types=1);

namespace App\Domains\Forest\Services;

use App\Domains\Forest\Contracts\ForestInterface;
use App\Domains\Fuel\Contracts\FuelInterface;
use App\Domains\Market\ValueObjects\Money;
use App\Domains\Stove\Contracts\FuelProviderInterface;
use App\Domains\Timeline\Contracts\TimelineInterface;

class ForestFuelProvider implements FuelProviderInterface
{
    private TimelineInterface $timeline;

    private ForestInterface $forest;

    public function __construct(TimelineInterface $timeline, ForestInterface $forest)
    {
        $this->timeline = $timeline;
        $this->forest = $forest;
    }

    public function getFuel(Money $money): ?FuelInterface
    {
        $this->timeline->goBackYears(30);

        for ($i = 0; $i < 10000; $i++) {
            $this->forest->plantOneTree();
        }

        $this->timeline->goForwardYears(30);

        return $this->forest->cutDownTree(ForestInterface::DRY_TREE_TYPE);
    }
}
