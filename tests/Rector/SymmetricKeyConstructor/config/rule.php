<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use phpseclib\rectorRules\SymmetricKeyConstructor;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(SymmetricKeyConstructor::class);
};
