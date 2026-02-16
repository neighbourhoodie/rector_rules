<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use phpseclib\rectorRules\Rector\V2toV3\SymmetricKeyConstructor;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(SymmetricKeyConstructor::class);
};
