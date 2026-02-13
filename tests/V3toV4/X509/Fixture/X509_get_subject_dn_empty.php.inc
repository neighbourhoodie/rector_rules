<?php

class GetSubjectDNClass {
  public static function GetSubjectDN() {
    $x509->getDN();
  }
}

?>
-----
<?php

class GetSubjectDNClass {
  public static function GetSubjectDN() {
    $x509->getSubjectDN(X509::DN_ARRAY);
  }
}

?>
