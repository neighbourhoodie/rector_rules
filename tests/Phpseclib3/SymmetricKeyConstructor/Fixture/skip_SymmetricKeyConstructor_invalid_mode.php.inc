<?php

use phpseclib\Crypt\AES;

$cipher = new AES(AES::FOO);
class AESInvalidModeClass {

  public static function run() {
    $cipher2 = new AES(AES::FOO);
  }
}

?>
