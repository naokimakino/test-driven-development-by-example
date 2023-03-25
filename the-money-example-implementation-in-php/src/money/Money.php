<?php

declare(strict_types=1);

namespace Src\money;

use Src\money\Dollar;
use Src\money\Franc;

abstract class Money
{
    protected int $amount;

    protected string $currency;

    abstract function times(int $multiplier): Money;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function equals(object $object): bool
    {
        $money = $object;
        return $this->amount === $money->amount && (get_called_class() === get_class($money));
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
