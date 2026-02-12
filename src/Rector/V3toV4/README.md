# Rules for v3 to v4 Rector

## Reading X.509 certs

This rule is for `v3` -> `v4` upgrade. In `v4` parsing is to moved to static call and there is no need to instantiate the object.

It replaces
```php
$x509 = new \phpseclib3\File\X509();
$cert = $x509->loadX509(file_get_contents('google.crt'));
```
with

```php
$cert = \phpseclib4\File\X509::load(file_get_contents('google.crt'));
```
