# Rules for v3 to v4 Rector

These are the rules, used for the phpseclib `v3` to phpseclib `v4` upgrade.

## Handle File Imports

In `v3` there is only `phpseclib3\File\X509` for all available certs. `v4` seperates them to
`phpseclib4\File\X509`, `phpseclib4\File\CSR` and `phpseclib4\File\CRL`. This Rector rule handles the different imports.

This rule runs *before* all other rules.
It refactors the static method and it adds or replaces the needed `use` statement at the end.

## X.509

In `v4` parsing is moved to static call and there is no need to instantiate the object.

It removes the `$x509 = new X509()` assignments.

Additionally, it removes the Date Validation `$x509->validateDate()`.
In `v4` `validateSignature()` takes care of this, although one could write their own custom date validation code.


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
