<?php

use phpseclib\Crypt\TripleDES;

$cipher = new TripleDES(TripleDES::MODE_OFB);
class SymmetricKeyTripleDESClass {

  public static function run() {
    $cipher2 = new TripleDES(TripleDES::MODE_OFB8);
  }
}

?>
-----
<?php

use phpseclib\Crypt\TripleDES;

$cipher = new TripleDES('ofb');
class SymmetricKeyTripleDESClass {

  public static function run() {
    $cipher2 = new TripleDES('ofb8');
  }
}

?>