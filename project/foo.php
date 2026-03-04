<?php

use phpseclib3\File\X509;
// use phpseclib4\File\CRL;
// use phpseclib4\File\CSR;
// use phpseclib4\File\X509;

class ReadSpkacClass {
  public static function foo() {
    $x509 = new X509();
    $spkac = $x509->loadSPKAC(file_get_contents('spkac.txt'));
    // $spkac = CRL::loadCRL(file_get_contents('spkac.txt'));
  }
}

class ReadCRLClass {
  public static function foo() {
    $x509 = new X509();
    $crl = $x509->loadCRL(file_get_contents('crl.bin'));
    // $crl = CRL::loadCRL(file_get_contents('crl.bin'));
  }
}

class ReadingCRLClass {
  public static function foo() {
    $crl = CRL::loadCRL(file_get_contents('crl.bin'));
  }
}

class CSRSignClass {
  public static function CSRSign() {
    $csr = $x509->signCSR();
    // $privKey->sign($csr);
  }
}

class CSRStringClass {
  public static function CSRString() {
    $x509->saveCSR($csr);
    // $csr->toString();
  }
}

class CSRStringEchoVarClass {
  public static function CSRString() {
    echo $csrString = $x509->saveCSR($csr);
    // echo $csrString = $csr->toString();
  }
}

class CSRStringVarClass {
  public static function CSRString() {
    $csrString = $x509->saveCSR($csr);
    // $csrString = $csr->toString();
  }
}

final class CRLLoadCRL {
  public function foo() {
    $x509 = new X509();
    $crl = $x509->loadCRL(file_get_contents('crl.bin'));
    // $crl = CRL::loadCRL(file_get_contents('crl.bin'));
  }
}

final class CSRCreateCSR {
  public function foo() {
    $x509 = new X509();
    $x509->setPrivateKey($privKey);
    // $csr = new CSR($privKey->getPublicKey());

    // todo: handle
    $x509->setDNProp('id-at-organizationName', 'phpseclib demo cert');
    // $x509->addDNProp('id-at-organizationName', 'phpseclib demo cert');
  }
}

final class CSRLoadCSR {
  public function foo() {
    $x509 = new X509();
    $csr = $x509->loadCSR(file_get_contents('csr.csr'));
    // $csr = CSR::loadCSR(file_get_contents('csr.csr'));
  }
}

final class SPKACCreate {
  public function foo() {
    $x509 = new X509();
    $x509->setPrivateKey($privKey);
    // $spkac = CRL::loadCRL($privKey->getPublicKey());
  }
}

final class SPKACLoadSPKAC {
  public function foo() {
    $x509 = new X509();
    $spkac = $x509->loadSPKAC(file_get_contents('spkac.txt'));
    // $spkac = CRL::loadCRL(file_get_contents('spkac.txt'));
  }
}

final class X509ReadCerts {
  public function foo() {
    $x509 = new X509();
    $cert = $x509->loadX509(file_get_contents('google.crt'));
    // $cert = X509::load(file_get_contents('google.crt'));
  }
}

class GetSubjectDNClass {
  public static function GetSubjectDN() {
    $x509->getDN();
    // $x509->getSubjectDN(X509::DN_ARRAY);
  }
}

class GetSubjectDNClass {
  public static function GetSubjectDN() {
    $cert = $x509->getDN(...);
    // $cert = $x509->getSubjectDN(...);
  }
}

class GetSubjectDNClass {
  public static function GetSubjectDN() {
    $x509->getDN(...);
    // $x509->getSubjectDN(...);
  }
}

class X509ReadUseMultiple {
  public function foo() {
    $x509 = new X509();
    $cert = $x509->loadX509('...');

    $foo = new X509();
    $bar = $foo->loadX509('...');
    // $cert = X509::load('...');
    // $bar = X509::load('...');
  }
}

class ReadingX509Class {
  public function foo() {
    $x509 = new X509();
    $cert = $x509->loadX509('...');
    // $cert = X509::load('...');

    print_r($cert);
  }
}

class SetDNPropClass {
  public static function SetDNProp() {
    $cert = $x509->setDNProp('id-at-organizationName', 'phpseclib CA cert');
    // $cert = $x509->addDNProp('id-at-organizationName', 'phpseclib CA cert');
  }
}

class X509SetDNPropClass {
  public static function SetDNProp() {
    $x509->setDNProp('id-at-organizationName', 'phpseclib CA cert');
    // $x509->addDNProp('id-at-organizationName', 'phpseclib CA cert');
  }
}

class CSRSetDNPropClass {
  public static function SetDNProp() {
    $csr->setDNProp('id-at-organizationName', 'phpseclib CA cert');
    // $csr->addDNProp('id-at-organizationName', 'phpseclib CA cert');
  }
}

class X509CertificateCreation {
  public function X509CertificateCreation () {
    $subject = new X509();
    $subject->setPublicKey($pubKey);
    $subject->setDN('/O=phpseclib demo subject');

    $issuer = new X509();
    $issuer->setPrivateKey($privKey);
    $issuer->setDN('/O=phpseclib demo issuer');

    $x509 = new X509();
    $result = $x509->sign($issuer, $subject);
    echo $x509->saveX509($result);

    // $x509 = new X509($pubKey);
    // $x509->setSubjectDN('O=phpseclib demo issuer');
    // $x509->setIssuerDN('O=phpseclib demo subject');
    // $privKey->sign($x509);
    // echo $x509->toString();
  }
}

class CreatingCSR {
  public function CreatingCSR () {
    $x509 = new X509();
    $x509->setPrivateKey($privKey);
    $x509->setDNProp('id-at-organizationName', 'phpseclib demo cert');

    $csr = $x509->signCSR();

    echo $x509->saveCSR($csr);

    // $csr = new \phpseclib4\File\CSR($privKey->getPublicKey());
    // $csr->setDNProp('id-at-organizationName', 'phpseclib demo cert');
    // $privKey->sign($csr);
    // echo $csr->toString();
  }
}

class LoadingSPKACS {
  public function LoadingSPKACS () {
    $x509 = new X509();
    $x509->setPrivateKey($privKey);
    $x509->setChallenge('123456789');
    $spkac = $x509->signSPKAC();

    // $spkac = new \phpseclib4\File\CRL::loadCRL($privKey->getPublicKey());
    // $spkac->setChallenge('123456789');
    // $privKey->sign($spkac);
  }
}

?>
