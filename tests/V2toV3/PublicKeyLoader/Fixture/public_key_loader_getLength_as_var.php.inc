<?php

use phpseclib\Crypt\RSA;

class PublicKeyLoaderRsaClass {
  public function PublicKeyLoaderLengthFunc()
  {
      $rsa = new RSA();
      $rsa->loadKey('...');
      $rsaLength = $rsa->getSize();
  }
}

?>
-----
<?php

use phpseclib3\Crypt\PublicKeyLoader;

class PublicKeyLoaderRsaClass {
  public function PublicKeyLoaderLengthFunc()
  {
      $rsa = PublicKeyLoader::load('...');
      $rsaLength = $rsa->getLength();
  }
}

?>
