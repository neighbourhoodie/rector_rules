<?php
use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\Name\RenameClassRector;

use phpseclib\rectorRules\Rector\V2toV3\CreateKey;
use phpseclib\rectorRules\Rector\V2toV3\SFTPFilesize;
use phpseclib\rectorRules\Rector\V2toV3\HashLength;
use phpseclib\rectorRules\Rector\V2toV3\PublicKeyLoader;
use phpseclib\rectorRules\Rector\V2toV3\PublicKeyLoaderChained;
use phpseclib\rectorRules\Rector\V2toV3\SymmetricKeyConstructor;

return RectorConfig::configure()
  ->withRules([
    CreateKey::class,
    SFTPFilesize::class,
    HashLength::class,
    PublicKeyLoader::class,
    PublicKeyLoaderChained::class,
    SymmetricKeyConstructor::class,
  ])
  ->withConfiguredRule(RenameClassRector::class, [
    'phpseclib\Crypt\RSA' => 'phpseclib3\Crypt\RSA',
    'phpseclib\Net\SSH2' => 'phpseclib3\Net\SSH2',
    'phpseclib\Net\SFTP' => 'phpseclib3\Net\SFTP',
    'phpseclib\Math\BigInteger' => 'phpseclib3\Math\BigInteger',
    'phpseclib\Crypt\Rijndael' => 'phpseclib3\Crypt\Rijndael',
    'phpseclib\Crypt\DES' => 'phpseclib3\Crypt\DES',
    'phpseclib\Crypt\TripleDES' => 'phpseclib3\Crypt\TripleDES',
    'phpseclib\Crypt\Blowfish' => 'phpseclib3\Crypt\Blowfish',
    'phpseclib\Crypt\Twofish' => 'phpseclib3\Crypt\Twofish',
    'phpseclib\Crypt\RC2' => 'phpseclib3\Crypt\RC2',
    'phpseclib\Crypt\AES' => 'phpseclib3\Crypt\AES',
  ])
  ->withImportNames(removeUnusedImports: true);
