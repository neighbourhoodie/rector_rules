<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use phpseclib\rectorRules\CreateKey;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(CreateKey::class);
};
