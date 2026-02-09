<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Phpseclib\RectorRules\Phpseclib3\Rules\CreateKey;
use Phpseclib\RectorRules\Phpseclib3\Rules\SFTPFilesize;
use Phpseclib\RectorRules\Phpseclib3\Rules\HashLength;
use Phpseclib\RectorRules\Phpseclib3\Rules\PublicKeyLoader;
use Phpseclib\RectorRules\Phpseclib3\Rules\PublicKeyLoaderChained;

return RectorConfig::configure()
    ->withPaths([
        // TODO: add project directory path to run rector
        __DIR__ . '/../../project',
    ])
    ->withRules([
        CreateKey::class,
        SFTPFilesize::class,
        HashLength::class,
        PublicKeyLoader::class,
        PublicKeyLoaderChained::class,
    ]);
