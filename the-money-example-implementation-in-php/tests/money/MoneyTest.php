<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Src\money\Dollar;

final class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}
