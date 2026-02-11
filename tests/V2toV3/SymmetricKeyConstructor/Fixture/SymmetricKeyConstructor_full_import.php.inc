<?php

class SymmetricKeyAESClass {

  public static function run() {
    $cipher = new \phpseclib\Crypt\AES(\phpseclib\Crypt\AES::MODE_CTR);
  }
}

?>
-----
<?php

class SymmetricKeyAESClass {

  public static function run() {
    $cipher = new \phpseclib\Crypt\AES('ctr');
  }
}

?>