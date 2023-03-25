<?php

declare(strict_types=1);

namespace Src\money;

use Src\money\Dollar;
use Src\money\Franc;

class Money
{
    protected int $amount;

    protected string $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function equals(object $object): bool
    {
        $money = $object;
        return $this->amount === $money->amount && $this->currency() === $money->currency();
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, "USD");
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, "CHF");
    }
}
