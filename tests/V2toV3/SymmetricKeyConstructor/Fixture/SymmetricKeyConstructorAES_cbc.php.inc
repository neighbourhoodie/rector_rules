<?php

use phpseclib\Crypt\AES;

class SymmetricKeyAESdefaultClass {

  public static function run() {
    $cipher = new AES(AES::MODE_CBC);
  }
}

?>
-----
<?php

use phpseclib\Crypt\AES;

class SymmetricKeyAESdefaultClass {

  public static function run() {
    $cipher = new AES('cbc');
  }
}

?>