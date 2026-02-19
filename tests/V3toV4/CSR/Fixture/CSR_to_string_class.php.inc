<?php

class CSRStringClass {
  public static function CSRString() {
    echo $x509->saveCSR($csr);
  }
}

?>
-----
<?php

class CSRStringClass {
  public static function CSRString() {
    echo $csr->toString();
  }
}

?>
