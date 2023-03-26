<?php

declare(strict_types=1);

namespace Src\money;

class Sum implements Expression
{
    public Expression $augend;

    public Expression $addend;

    public function __construct(Expression $augend, Expression $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    // 仮実装のため、返り値を?Expressionとしている。Expressionとしたい。
    public function plus(Expression $addend): ?Expression
    {
        return null;
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $amount = $this->augend->reduce($bank, $to)->amount
            + $this->addend->reduce($bank, $to)->amount;
        return new Money($amount, $to);
    }
}
