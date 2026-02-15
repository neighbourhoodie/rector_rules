<?php

use phpseclib\Crypt\AES;

$cipher = new AES(AES::MODE_CTR);
class SymmetricKeyAESClass {

  public static function run() {
    $cipher2 = new AES(AES::MODE_CTR);
  }
}

?>
-----
<?php

use phpseclib\Crypt\AES;

$cipher = new AES('ctr');
class SymmetricKeyAESClass {

  public static function run() {
    $cipher2 = new AES('ctr');
  }
}

?>