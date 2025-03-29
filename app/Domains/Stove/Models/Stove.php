<?php

declare(strict_types=1);

namespace App\Domains\Stove\Models;

use App\Domains\Fuel\Contracts\FuelInterface;
use App\Domains\Stove\Contracts\StoveInterface;

class Stove implements StoveInterface
{
    public function useStove(FuelInterface $fuel): void {}
}
