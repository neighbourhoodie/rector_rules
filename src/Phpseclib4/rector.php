<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        // TODO: add project directory path to run rector
        __DIR__ . '/../../project',
    ])
    ->withRules([
    ]);
