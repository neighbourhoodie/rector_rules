<?php

declare(strict_types=1);

namespace phpseclib\rectorRules\Rector\V3toV4;

use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Stmt\Expression;
use PhpParser\NodeTraverser;
use PhpParser\Node\Stmt\Use_;
use PhpParser\Node\UseItem;

use Rector\Rector\AbstractRector;

final class X509 extends AbstractRector
{
  private ?string $x509Var = null;
  private bool $x509Converted = false;

  public function getNodeTypes(): array
  {
    return [
      Expression::class,
      MethodCall::class,
      Use_::class,
    ];
  }

  public function refactor(Node $node): Node|int|null
  {
    // Remove: $x509 = new X509() or new \phpseclib3\File\X509()
    if ($node instanceof Expression && $node->expr instanceof Assign) {
      $assign = $node->expr;
      if (
        $assign->var instanceof Variable &&
        $assign->expr instanceof New_ &&
        $this->isName($assign->expr->class, 'phpseclib3\File\X509')
      ) {
        $this->x509Var = $assign->var->name;
        $this->x509Converted = true;
        return NodeTraverser::REMOVE_NODE;
      }
    }

    // Remove use phpseclib3\File\X509
    if ($this->x509Converted && $node instanceof Use_) {
      foreach ($node->uses as $key => $useItem) {
        if ($useItem instanceof UseItem &&
          $this->isName($useItem->name, 'phpseclib3\File\X509')
        ) {
            return NodeTraverser::REMOVE_NODE;
        }
      }
    }

    // Replace: $x509->loadX509(...) → X509::load(...)
    if ($node instanceof MethodCall) {
      if (
        $node->var instanceof Variable &&
        $node->var->name === $this->x509Var &&
        $this->isName($node->name, 'loadX509')
      ) {
        return new StaticCall(
          new Name('\phpseclib4\File\X509'),
          'load',
          $node->args
        );
      }
    }
    return null;
  }
}
