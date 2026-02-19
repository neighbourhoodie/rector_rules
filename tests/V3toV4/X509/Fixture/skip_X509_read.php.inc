<?php

use phpseclib4\File\X509;

class ReadingX509Class {
  public static function ReadingX509() {
    $cert = X509::load(file_get_contents('google.crt'));
  }
}
