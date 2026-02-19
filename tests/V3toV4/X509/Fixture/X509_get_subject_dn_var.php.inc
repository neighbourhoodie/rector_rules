<?php

class GetSubjectDNClass {
  public static function GetSubjectDN() {
    $cert = $x509->getDN(...);
  }
}

?>
-----
<?php

class GetSubjectDNClass {
  public static function GetSubjectDN() {
    $cert = $x509->getSubjectDN(...);
  }
}

?>
