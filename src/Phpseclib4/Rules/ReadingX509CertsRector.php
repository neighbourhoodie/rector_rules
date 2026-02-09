<?php

declare(strict_types=1);

namespace Phpseclib\RectorRules\Phpseclib4\Rules;

use PhpParser\Node;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Expr\Variable;
use Rector\Rector\AbstractRector;
use PhpParser\NodeTraverser;

final class ReadingX509CertsRector extends AbstractRector
{
    private ?string $x509Var = null;

    public function getNodeTypes(): array
    {
        return [
            Expression::class
        ];
    }

    public function refactor(Node $node): Node|int|null
    {
        // Remove: $x509 = new \phpseclib3\File\X509()
        var_dump('+++node');
        dump_node($node);
        if ($node instanceof Expression && $node->expr instanceof Assign) {
            $assign = $node->expr;
            var_dump('+++x509 node');
            dump_node($node);

            if (
                $assign->var instanceof Variable &&
                $assign->expr instanceof New_ &&
                $this->isName($assign->expr->class, 'phpseclib3\File\X509')
            ) {
                $this->x509Var = $assign->var->name;
                return NodeTraverser::REMOVE_NODE;
            }
        }

        return null;
    }
}
