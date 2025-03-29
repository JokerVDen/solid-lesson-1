<?php

declare(strict_types=1);

namespace App\Domains\Stove\Contracts;

use App\Domains\Fuel\Contracts\FuelInterface;

interface StoveInterface
{
    public function useStove(FuelInterface $fuel): void;
}
