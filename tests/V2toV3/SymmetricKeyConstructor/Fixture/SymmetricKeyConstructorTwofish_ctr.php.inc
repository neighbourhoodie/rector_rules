<?php

use phpseclib\Crypt\Twofish;

$cipher = new Twofish(Twofish::MODE_CBC);
class SymmetricKeyTwofishClass {

  public static function run() {
    $cipher2 = new Twofish(Twofish::MODE_ECB);
  }
}

?>
-----
<?php

use phpseclib\Crypt\Twofish;

$cipher = new Twofish('cbc');
class SymmetricKeyTwofishClass {

  public static function run() {
    $cipher2 = new Twofish('ecb');
  }
}

?>