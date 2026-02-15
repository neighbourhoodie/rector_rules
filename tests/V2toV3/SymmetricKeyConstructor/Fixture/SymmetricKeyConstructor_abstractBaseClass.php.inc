<?php

use phpseclib\Crypt\DES;
use phpseclib\Crypt\AES;

$des = new DES(DES::MODE_CBC);

abstract class BaseClass
{
    abstract public function run();
}

final class hashLengthClass extends BaseClass
{
  function run() {
    $aes = new AES(AES::MODE_CBC);
  }
}

?>
-----
<?php

use phpseclib\Crypt\DES;
use phpseclib\Crypt\AES;

$des = new DES('cbc');

abstract class BaseClass
{
    abstract public function run();
}

final class hashLengthClass extends BaseClass
{
  function run() {
    $aes = new AES('cbc');
  }
}

?>
