<?php

use phpseclib\Crypt\Rijndael;

$cipher = new Rijndael(Rijndael::MODE_GCM);
class SymmetricKeyRijndaelClass {

  public static function run() {
    $cipher2 = new Rijndael(Rijndael::MODE_OFB8);
  }
}

?>
-----
<?php

use phpseclib\Crypt\Rijndael;

$cipher = new Rijndael('gcm');
class SymmetricKeyRijndaelClass {

  public static function run() {
    $cipher2 = new Rijndael('ofb8');
  }
}

?>