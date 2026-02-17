<?php
use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\Name\RenameClassRector;

use phpseclib\rectorRules\Rector\V3toV4\X509;
use phpseclib\rectorRules\Rector\V3toV4\SetDNProp;

return RectorConfig::configure()
  ->withRules([
    X509::class,
    SetDNProp::class,
  ]);
