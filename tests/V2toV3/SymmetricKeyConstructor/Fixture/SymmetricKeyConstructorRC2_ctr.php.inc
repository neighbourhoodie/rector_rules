<?php

use phpseclib\Crypt\RC2;

$cipher = new RC2(RC2::MODE_ECB);
class SymmetricKeyTwofishClass {

  public static function run() {
    $cipher2 = new RC2(RC2::MODE_GCM);
  }
}

?>
-----
<?php

use phpseclib\Crypt\RC2;

$cipher = new RC2('ecb');
class SymmetricKeyTwofishClass {

  public static function run() {
    $cipher2 = new RC2('gcm');
  }
}

?>