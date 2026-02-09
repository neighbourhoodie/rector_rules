<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Phpseclib\RectorRules\Phpseclib4\Rules\ReadingX509CertsRector;

return RectorConfig::configure()
    ->withPaths([
        // TODO: add project directory path to run rector
        __DIR__ . '/../../project',
    ])
    ->withRules([
        ReadingX509CertsRector::class,
    ]);
