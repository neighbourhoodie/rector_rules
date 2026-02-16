<?php

use phpseclib\Crypt\AES;

class Foo {
  public const MODE_CTR = 1;
}

class A {
  public function run() {
    $cipher = new Foo(Foo::MODE_CTR);
  }
}

?>
