<?php

class SetDNPropClass {
  public static function SetDNProp() {
    $cert = $x509->setDNProp('id-at-organizationName', 'phpseclib CA cert');
  }
}

?>
-----
<?php

class SetDNPropClass {
  public static function SetDNProp() {
    $cert = $x509->addDNProp('id-at-organizationName', 'phpseclib CA cert');
  }
}

?>
