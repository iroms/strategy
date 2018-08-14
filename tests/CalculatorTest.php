<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 15.08.2018
 * Time: 0:17
 */

use PHPUnit\Framework\TestCase;
use \Iroms\Strategy\Calculator;

final class CalculatorTest extends TestCase
{
    public function testPlusTwoNumbers(): void
    {
        $sum = new Calculator( '+');
        $a = 85;
        $b = 6;
        $this->assertEquals(
            $a + $b,
            $sum->calc($a, $b)
        );
    }

    public function testSubTwoNumbers(): void
    {
        $sum = new Calculator( '-');
        $a = 85;
        $b = 6;
        $this->assertEquals(
            $a - $b,
            $sum->calc($a, $b)
        );
    }

    public function testMultyTwoNumbers(): void
    {
        $sum = new Calculator( '*');
        $a = 85;
        $b = 6;
        $this->assertEquals(
            $a * $b,
            $sum->calc($a, $b)
        );
    }

    public function testDivTwoNumbers(): void
    {
        $sum = new Calculator( '/');
        $a = 85;
        $b = 6;
        $this->assertEquals(
            floor($a / $b),
            $sum->calc($a, $b)
        );
    }

    public function testDivByZero(): void
    {
        $sum = new Calculator( '/');
        $this->expectException(\Exception::class);
        $a = 85;
        $b = 0;
        $sum->calc($a, $b);
    }


}