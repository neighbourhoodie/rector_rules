<?php

declare(strict_types=1);

namespace phpseclib\rectorRules\Rector\V3toV4;

use PhpParser\NodeTraverser;
use PhpParser\Node;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Stmt\Expression;

use Rector\Rector\AbstractRector;

final class X509 extends AbstractRector
{
  private ?string $x509VarName = null;

  public function getNodeTypes(): array
  {
    return [
      Expression::class,
      MethodCall::class,
    ];
  }

  public function refactor(Node $node): Node|int|null
  {
    // Collect varnames that refer to phpseclib3\File\X509
    // remove unused $x509 = new X509() assignments
    if (
      $node instanceof Expression &&
      $node->expr instanceof Assign &&
      $node->expr->expr instanceof New_) {
      if ($this->isName($node->expr->expr->class, 'phpseclib3\File\X509')) {
        $this->x509VarName = $node->expr->var->name;
        return NodeTraverser::REMOVE_NODE;
      }
      return null;
    }

    // Delete: $x509->validateDate()
    // This is handled by validateSignature() now
    if (
      $node instanceof Expression &&
      $node->expr instanceof MethodCall &&
      $node->expr->var instanceof Variable &&
      $node->expr->var->name === $this->x509VarName &&
      $this->isName($node->expr->name, 'validateDate')
      ) {
      return NodeTraverser::REMOVE_NODE;
    }
    return null;
  }
}
