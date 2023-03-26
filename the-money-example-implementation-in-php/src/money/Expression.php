<?php

declare(strict_types=1);

namespace Src\money;

interface Expression
{
    // Expressionとしたい。
    public function plus(Expression $addend): ?Expression;

    public function reduce(Bank $bank, string $to): Money;
}
