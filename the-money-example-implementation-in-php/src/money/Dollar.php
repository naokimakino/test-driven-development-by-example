<?php

declare(strict_types=1);

namespace Src\money;

final class Dollar
{
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(object $object): bool
    {
        $dollar = $object;
        return $this->amount === $dollar->amount;
    }
}
