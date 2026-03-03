<?php

// use phpseclib4\File\CRL;
// use phpseclib4\File\CSR;
// use phpseclib4\File\X509;

class CLRRead {
  public function foo() {
    $x509 = new \phpseclib3\File\X509();
    $crl = $x509->loadCRL(file_get_contents('crl.bin'));
    // $crl = CRL::loadCRL(file_get_contents('crl.bin'));

    print_r($crl);
  }
}

final class CRLLoadCRL {
  public function foo() {
    $x509 = new \phpseclib3\File\X509();
    $crl = $x509->loadCRL(file_get_contents('crl.bin'));
    // $crl = CRL::loadCRL(file_get_contents('crl.bin'));
  }
}

final class CSRLoadCSR {
  public function foo() {
    $x509 = new \phpseclib3\File\X509();
    $csr = $x509->loadCSR(file_get_contents('csr.csr'));
    // $csr = CSR::loadCSR(file_get_contents('csr.csr'));
  }
}

final class SPKACLoadSPKAC {
  public function foo() {
    $x509 = new \phpseclib3\File\X509();
    $spkac = $x509->loadSPKAC(file_get_contents('spkac.txt'));
    // $spkac = CRL::loadCRL(file_get_contents('spkac.txt'));
  }
}

final class X509ReadCerts {
  public function foo() {
    $x509 = new \phpseclib3\File\X509();
    $cert = $x509->loadX509(file_get_contents('google.crt'));
    // $cert = X509::load(file_get_contents('google.crt'));
  }
}

class ReadingX509Class {
  public static function ReadingX509() {
    $x509 = new \phpseclib3\File\X509();
    $cert = $x509->loadX509(file_get_contents('google.crt'));
    // $cert = X509::load(file_get_contents('google.crt'));
  }
}

class ReadingX509ValidateDateVarClass {
  public static function foo() {
    $x509 = new \phpseclib3\File\X509();
    $foo = $x509->validateDate();
    // remove validateDate()
  }
}

class ReadingX509ValidateDateClass {
  public static function foo() {
    $x509 = new \phpseclib3\File\X509();
    $x509->validateDate();
    // remove validateDate()
  }
}

?>
