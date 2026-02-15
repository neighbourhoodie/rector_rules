<?php

use phpseclib\Crypt\AES;

class AESNoArgsClass {

  public static function run() {
    $cipher = new AES();
  }
}

?>
-----
<?php

use phpseclib\Crypt\AES;

class AESNoArgsClass {

  public static function run() {
    $cipher = new AES('cbc');
  }
}

?>
