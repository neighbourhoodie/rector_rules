# phpseclib3_rector

Rector rules to upgrade a phpseclib v2.0 install to phpseclib v3.0

## Overview

You can use [phpseclib2_compat](https://github.com/phpseclib/phpseclib2_compat) to make all your phpseclib v2.0 calls use phpseclib v3.0, internally, under the hood, or you can use this [Rector](https://getrector.com/) rule to upgrade your phpseclib v2.0 calls to phpseclib v3.0 calls.

## Installation

With [Composer](https://getcomposer.org/):

```bash
composer require rector/rector --dev
```

## Usage

This repository has rules for both phpseclib3 and phpseclib4 versions. Each has their own `rector.php` files in their respective folders to run the rules.
The `rector.php` file has the following contents, where the directory path points to the codebase in which the rules will be executed:

```php
<?php
use Rector\Config\RectorConfig;
use Phpseclib\RectorRules\Phpseclib3\Rules\RuleName;

return RectorConfig::configure()
    ->withPaths([
        // update to add relevant project directory path
        __DIR__ . '/../../project',
    ])
    ->withRules([
        RuleName::class,
    ]);
```
In the root directory you can then run Rector by doing either of these commands:

```bash
# phhpseclib v3
vendor/bin/rector process --config=src/Phpseclib3/rector.php --dry-run
vendor/bin/rector process --config=src/Phpseclib3/rector.php

# phhpseclib v4
vendor/bin/rector process --config=src/Phpseclib4/rector.php --dry-run
vendor/bin/rector process --config=src/Phpseclib4/rector.php
```
The files will either be full on modified or (in the case of `--dry-run`) the changes that would be made will be previewed.

## Running the tests

To run all Retor tests, run

```
vendor/bin/phpunit tests
```

To run all tests of a single rector rule, add --filter to the test command.

```
vendor/bin/phpunit tests --filter CustomRectorTest
```

### Test Fixtures

Next to the test case, there is `/Fixture` directory. It contains many test fixture files that verified the Rector rule work correctly in all possible cases.

There are 2 fixture formats:

A. `test_fixture.php.inc` - The Code Should Change

```php
<code before>
-----
<code after>'
```

B. `skip_rule_test_fixture.php.inc` - The Code Should Be Skipped

```php
<code before>
```

## Rules

Details of the rules are in separate Readme files for [phpseclib3](./src/Phpseclib3/README.md) and [phpseclib4](./src/Phpseclib4/README.md).
