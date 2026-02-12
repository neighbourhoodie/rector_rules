<?php

declare(strict_types=1);

namespace phpseclib\rectorRules\Rector\V3toV4;

use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\Cast\String_;
use PhpParser\Node\Stmt\UseUse;
use PhpParser\Node\Stmt\Expression;

use Rector\Rector\AbstractRector;

final class X509 extends AbstractRector
{

  public function getNodeTypes(): array
  {
    return [
      UseUse::class,
      Expression::class,
    ];
  }

  public function refactor(Node $node): ?Node
  {
    return $node;
  }
}
