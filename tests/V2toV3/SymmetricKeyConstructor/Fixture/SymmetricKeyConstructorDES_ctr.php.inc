<?php

use phpseclib\Crypt\DES;

$cipher = new DES(DES::MODE_CTR);
class SymmetricKeyDESClass {

  public static function run() {
    $cipher2 = new DES(DES::MODE_CTR);
  }
}

?>
-----
<?php

use phpseclib\Crypt\DES;

$cipher = new DES('ctr');
class SymmetricKeyDESClass {

  public static function run() {
    $cipher2 = new DES('ctr');
  }
}

?>