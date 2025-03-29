<?php

declare(strict_types=1);

namespace App\Domains\Forest\Contracts;

use App\Domains\Fuel\Contracts\StoveFuelInterface;

interface ForestInterface
{
    public const string DRY_TREE_TYPE = 'dry';

    public function plantOneTree(): void;

    public function cutDownTree(string $treeType): StoveFuelInterface;
}
