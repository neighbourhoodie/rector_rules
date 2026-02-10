<?php

declare(strict_types=1);

namespace phpseclib\rectorRules;

use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Expr\ClassConstFetch;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\UseUse;

use Rector\Rector\AbstractRector;

final class SymmetricKeyConstructor extends AbstractRector {

  private $hasBlockCipherImport = false;
  private const BLOCK_CIPHER_IMPORTS = [
    'phpseclib\Crypt\Rijndael',
    'phpseclib\Crypt\DES',
    'phpseclib\Crypt\TripleDES',
    'phpseclib\Crypt\Blowfish',
    'phpseclib\Crypt\Twofish',
    'phpseclib\Crypt\RC2',
    'phpseclib\Crypt\AES',
  ];
  private const MODE_MAP = [
    'MODE_ECB'  => 'ecb',
    'MODE_CBC'  => 'cbc',
    'MODE_CTR'  => 'ctr',
    'MODE_CFB'  => 'cfb',
    'MODE_CFB8' => 'cfb8',
    'MODE_OFB'  => 'ofb',
    'MODE_OFB8' => 'ofb8',
    'MODE_GCM'  => 'gcm',
];

  public function getNodeTypes(): array {
    return [
      UseUse::class,
      New_::class,
    ];
  }

  public function refactor(Node $node): ?Node {
    // apply for all the classes that extend \phpseclib3\Crypt\Common\BlockCipher in v3
    if ($node instanceof UseUse) {
      foreach (self::BLOCK_CIPHER_IMPORTS as $class) {
        if ($this->isName($node->name, $class)) {
          $this->hasBlockCipherImport = true;
          break;
        }
      }
      return null;
    }

    if (!$this->hasBlockCipherImport) {
      return null;
    }

    if (! $node instanceof New_) {
      return null;
    }
    if (! $node->class instanceof Name) {
      return null;
    }

    // Add the default mode when there are no args
    if (empty($node->args)) {
      $node->args[0] = new Arg(new String_('cbc'));
      return $node;
    }
    $firstArg = $node->args[0]->value;

    // Only handle constants like AES::MODE_*
    if (!$firstArg instanceof ClassConstFetch) {
      return null;
    }

    $constClass = $this->getName($firstArg->class);
    if ($constClass === null) {
      return null;
    }
    if (! in_array($constClass, self::BLOCK_CIPHER_IMPORTS, true)) {
      return null;
    }

    $modeName = $this->getName($firstArg->name);

    if (!isset(self::MODE_MAP[$modeName])) {
      return null;
    }

    $node->args[0] = new Arg(new String_(self::MODE_MAP[$modeName]));

    return $node;
  }
}
