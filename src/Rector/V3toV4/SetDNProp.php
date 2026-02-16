<?php

declare(strict_types=1);

namespace Phpseclib\RectorRules\Rector\V3toV4;

use PhpParser\Node;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Identifier;
use Rector\Rector\AbstractRector;

final class SetDNProp extends AbstractRector
{
    public function getNodeTypes(): array
    {
        return [MethodCall::class];
    }

    public function refactor(Node $node): ?Node
    {
        if (! $node instanceof MethodCall) {
            return null;
        }

        if (! $this->isName($node->name, 'setDNProp')) {
            return null;
        }

        // rename method and keep arguments
        $node->name = new Identifier('addDNProp');

        return $node;
    }
}

