<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\Name\RenameClassRector;

use Phpseclib\RectorRules\Phpseclib3\Rules\CreateKey;
use Phpseclib\RectorRules\Phpseclib3\Rules\SFTPFilesize;
use Phpseclib\RectorRules\Phpseclib3\Rules\HashLength;
use Phpseclib\RectorRules\Phpseclib3\Rules\PublicKeyLoader;
use Phpseclib\RectorRules\Phpseclib3\Rules\PublicKeyLoaderChained;
use Phpseclib\RectorRules\Phpseclib3\Rules\SymmetricKeyConstructor;

return RectorConfig::configure()
    ->withPaths([
        // TODO: add project directory path to run rector
        __DIR__ . '/../../src/test',
        // __FILE__
    ])
    ->withRules([
        CreateKey::class,
        SFTPFilesize::class,
        HashLength::class,
        PublicKeyLoader::class,
        // PublicKeyLoaderChained::class,
        SymmetricKeyConstructor::class,
    ])
    ->withConfiguredRule(RenameClassRector::class, [
        'phpseclib\Crypt\Rijndael' => 'phpseclib3\Crypt\Rijndael',
        'phpseclib\Crypt\DES' => 'phpseclib3\Crypt\DES',
        'phpseclib\Crypt\TripleDES' => 'phpseclib3\Crypt\TripleDES',
        'phpseclib\Crypt\Blowfish' => 'phpseclib3\Crypt\Blowfish',
        'phpseclib\Crypt\Twofish' => 'phpseclib3\Crypt\Twofish',
        'phpseclib\Crypt\RC2' => 'phpseclib3\Crypt\RC2',
        'phpseclib\Crypt\AES' => 'phpseclib3\Crypt\AES',
    ])
    ->withImportNames(removeUnusedImports: true);
