<?php

use phpseclib\Crypt\Rijndael;
use phpseclib\Crypt\DES;
use phpseclib\Crypt\TripleDES;
use phpseclib\Crypt\Blowfish;
use phpseclib\Crypt\Twofish;
use phpseclib\Crypt\RC2;
use phpseclib\Crypt\AES;

class SymmetricKeyClass {

  public static function run() {
    $rijndael = new Rijndael(Rijndael::MODE_ECB);
    $des = new DES(DES::MODE_CBC);
    $tripleDES = new TripleDES(TripleDES::MODE_CTR);
    $blowfish = new Blowfish(Blowfish::MODE_CFB);
    $twofish = new Twofish(Twofish::MODE_CFB8);
    $rc2 = new RC2(RC2::MODE_OFB);
    $aes = new AES(AES::MODE_OFB8);
    $aes2 = new AES(AES::MODE_GCM);
  }
}

?>
-----
<?php

use phpseclib\Crypt\Rijndael;
use phpseclib\Crypt\DES;
use phpseclib\Crypt\TripleDES;
use phpseclib\Crypt\Blowfish;
use phpseclib\Crypt\Twofish;
use phpseclib\Crypt\RC2;
use phpseclib\Crypt\AES;

class SymmetricKeyClass {

  public static function run() {
    $rijndael = new Rijndael('ecb');
    $des = new DES('cbc');
    $tripleDES = new TripleDES('ctr');
    $blowfish = new Blowfish('cfb');
    $twofish = new Twofish('cfb8');
    $rc2 = new RC2('ofb');
    $aes = new AES('ofb8');
    $aes2 = new AES('gcm');
  }
}

?>
