<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use phpseclib\rectorRules\Rector\V3toV4\SetDNProp;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(SetDNProp::class);
};
