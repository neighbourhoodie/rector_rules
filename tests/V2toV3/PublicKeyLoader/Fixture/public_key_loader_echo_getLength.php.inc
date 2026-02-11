<?php

use phpseclib\Crypt\RSA;

class PublicKeyLoaderRsaClass {
  public static function PublicKeyLoaderFuncWithEcho() {
    $rsaEcho = new RSA();
    $rsaEcho->loadKey('...');
    echo $rsaEcho->getSize();
  }
}

?>
-----
<?php

use phpseclib3\Crypt\PublicKeyLoader;

class PublicKeyLoaderRsaClass {
  public static function PublicKeyLoaderFuncWithEcho() {
    $rsaEcho = PublicKeyLoader::load('...');
    echo $rsaEcho->getLength();
  }
}

?>
