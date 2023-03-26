<?php

declare(strict_types=1);

namespace Src\money;

class Money implements Expression
{
    public int $amount;

    public string $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function plus(Money $addend): Expression
    {
        return new Sum($this, $addend);
    }

    public function reduce(string $to): Money {
        return $this;
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
        return new Money($amount, "USD");
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, "CHF");
    }
}
