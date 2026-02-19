<?php

declare(strict_types=1);

namespace phpseclib\rectorRules\Rector\V3toV4;

use PhpParser\Node;
use PhpParser\Node\Stmt\Echo_;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Identifier;
use Rector\Core\Rector\AbstractRector;

final class CreateCSR extends AbstractRector
{
  public function getNodeTypes(): array
  {
      return [Echo_::class];
  }

  public function refactor(Node $node): ?Node
  {
    if (! $node instanceof Echo_) {
      return null;
    }

    foreach ($node->exprs as $key => $expr) {
      if (! $expr instanceof MethodCall) {
        continue;
      }

      // echo $x509->saveX509($result)
      if ($this->isName($expr->name, 'saveX509')) {
        $node->exprs[$key] = new MethodCall(
          $expr->var,
          new Identifier('toString')
        );
      }
    }

    return $node;
  }
}
