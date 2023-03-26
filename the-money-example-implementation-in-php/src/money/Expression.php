<?php

declare(strict_types=1);

namespace Src\money;

interface Expression
{
    public function reduce(string $to): Money;
}
