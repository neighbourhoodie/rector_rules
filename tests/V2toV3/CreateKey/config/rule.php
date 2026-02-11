<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use phpseclib\rectorRules\Rector\V2toV3\CreateKey;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(CreateKey::class);
};
