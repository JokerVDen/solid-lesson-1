<?php

declare(strict_types=1);

namespace App\Domains\Forest\Models;

use App\Domains\Forest\Contracts\ForestInterface;
use App\Domains\Fuel\Contracts\FuelInterface;

class Forest implements ForestInterface
{
    public function plantOneTree(): void {}

    public function cutDownTree(string $treeType): FuelInterface
    {
        return new class implements FuelInterface {
        };
    }
}
