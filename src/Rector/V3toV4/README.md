# Rules for v3 to v4 Rector

These are the rules, used for the phpseclib `v3` to phpseclib `v4` upgrade.

## Handle File Imports

In `v3` there is only `phpseclib3\File\X509` for all available certs. `v4` seperates them to
`phpseclib4\File\X509`, `phpseclib4\File\CSR` and `phpseclib4\File\CRL`. This Rector rule handles the different imports.

First, it deletes `use phpseclib3\File\X509;`. Then it refactors the method and at the end, it adds the needed `use` statement.

## Reading X.509 certs

In `v4` parsing is moved to static call and there is no need to instantiate the object.

It replaces
```php
$x509 = new \phpseclib3\File\X509();
$cert = $x509->loadX509(file_get_contents('google.crt'));
```
with

```php
$cert = \phpseclib4\File\X509::load(file_get_contents('google.crt'));
```

## Set DN Prop

`setDNProp()` in phpseclib `v3` was adding a DN prop even if one already existed. In `v4` `addDNProp` is used instead.

It replaces
```php
$x509->setDNProp('id-at-organizationName', 'phpseclib CA cert');
```
with

```php
$x509->addDNProp('id-at-organizationName', 'phpseclib CA cert');
```
