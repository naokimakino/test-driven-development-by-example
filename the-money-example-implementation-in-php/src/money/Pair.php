<?php

declare(strict_types=1);

namespace Src\money;

// NOTE: Rateを連想配列で保持するようにしたため、このクラスは不要である
class Pair
{
    private string $from;

    private string $to;

    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function equals(object $object): bool
    {
        $pair = $object;
        return ($this->from === $pair->from) && ($this->to === $pair->to);
    }

    public function hashCode(): int
    {
        return 0;
    }
}
