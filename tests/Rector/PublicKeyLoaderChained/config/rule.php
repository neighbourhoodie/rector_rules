<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use phpseclib\phpseclib3Rector\PublicKeyLoaderChained;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(PublicKeyLoaderChained::class);
};
