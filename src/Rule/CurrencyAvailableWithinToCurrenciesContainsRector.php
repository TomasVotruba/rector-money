<?php

declare(strict_types=1);

namespace Rector\Money\Rule;

use PhpParser\Node;
use PhpParser\Node\Expr\MethodCall;
use Rector\Core\Rector\AbstractRector;
use Rector\Core\ValueObject\PhpVersion;
use Rector\VersionBonding\Contract\MinPhpVersionInterface;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class CurrencyAvailableWithinToCurrenciesContainsRector extends AbstractRector implements MinPhpVersionInterface
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            'Changes the way how currency is verified against collection',
            [
                new CodeSample(
                    '$currency->isAvailableWithin($currencies);',
                    '$currencies->contains($currency);'
                ),
            ]
        );
    }

    /**
     * @return array<class-string<Node>>
     */
    public function getNodeTypes(): array
    {
        return [MethodCall::class];
    }

    /**
     * @param MethodCall $node
     */
    public function refactor(Node $node): ?Node
    {
        return null;
    }

    public function provideMinPhpVersion(): int
    {
        return PhpVersion::PHP_80;
    }
}
