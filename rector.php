<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use phpseclib\rectorRules\Set\V2toV3Set;

return RectorConfig::configure()
    ->withSets([V2toV3Set::PATH]);
