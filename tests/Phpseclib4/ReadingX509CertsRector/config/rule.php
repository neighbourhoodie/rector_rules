<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Phpseclib\RectorRules\Phpseclib4\Rules\ReadingX509CertsRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ReadingX509CertsRector::class);
};
