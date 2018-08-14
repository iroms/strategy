<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 14.08.2018
 * Time: 22:46
 */

namespace Iroms\Strategy;


class PlusOperation implements OperationInterface
{
    public function calc(int $a, int $b): int
    {
        return $a + $b;
    }
}