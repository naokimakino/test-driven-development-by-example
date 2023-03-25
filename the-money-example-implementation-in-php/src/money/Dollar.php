<?php

declare(strict_types=1);

namespace Src\money;

final class Dollar extends Money
{
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }
}
