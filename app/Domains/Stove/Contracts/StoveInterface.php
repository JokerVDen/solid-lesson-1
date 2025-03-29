<?php

declare(strict_types=1);

namespace App\Domains\Stove\Contracts;

use App\Domains\Fuel\Contracts\StoveFuelInterface;

interface StoveInterface
{
    public function useStove(StoveFuelInterface $fuel): void;
}
