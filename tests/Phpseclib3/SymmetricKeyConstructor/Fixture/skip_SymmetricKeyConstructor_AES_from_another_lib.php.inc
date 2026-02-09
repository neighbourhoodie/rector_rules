<?php

use another\lib\AES;

$cipher = new AES(AES::MODE_CTR);
class AESFromAnotherLibClass {

  public static function run() {
    $cipher2 = new AES(AES::MODE_CTR);
  }
}

?>
