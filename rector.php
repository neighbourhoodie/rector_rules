<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use phpseclib\rectorRules\Set;

return RectorConfig::configure()
    ->withSets([Set::PATH]);
