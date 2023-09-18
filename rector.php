<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Php70\Rector;
return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src'
    ]);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_80,
    ]);
};
