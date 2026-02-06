<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Phpseclib\RectorRules\Phpseclib3\Rules\PublicKeyLoader;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(PublicKeyLoader::class);
};
