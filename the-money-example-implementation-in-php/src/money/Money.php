<?php

declare(strict_types=1);

namespace Src\money;

class Money
{
    protected int $amount;

    public function equals(object $object): bool
    {
        $money = $object;
        return $this->amount === $money->amount && (get_called_class() === get_class($money));
    }
}
