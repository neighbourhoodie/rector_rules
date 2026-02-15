<?php

use phpseclib\Crypt\Blowfish;

$cipher = new Blowfish(Blowfish::MODE_CFB);
class SymmetricKeyBlowfishClass {

  public static function run() {
    $cipher2 = new Blowfish(Blowfish::MODE_CFB8);
  }
}

?>
-----
<?php

use phpseclib\Crypt\Blowfish;

$cipher = new Blowfish('cfb');
class SymmetricKeyBlowfishClass {

  public static function run() {
    $cipher2 = new Blowfish('cfb8');
  }
}

?>