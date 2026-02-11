<?php

use phpseclib\Crypt\RSA;

class PublicKeyLoaderRsaClass {
  public static function PublicKeyLoaderFunc()
  {
      $rsa = new RSA();
      $rsa->loadKey('...');
      $rsa->getSize();
  }

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
  public static function PublicKeyLoaderFunc()
  {
      $rsa = PublicKeyLoader::load('...');
      $rsa->getLength();
  }

  public function PublicKeyLoaderLengthFunc()
  {
      $rsa = PublicKeyLoader::load('...');
      $rsaLength = $rsa->getLength();
  }
}

?>
