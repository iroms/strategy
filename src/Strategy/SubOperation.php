<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 14.08.2018
 * Time: 22:50
 */

namespace Iroms\Strategy;


class SubOperation implements OperationInterface
{
    public function calc(int $a, int $b): int
    {
        return $a - $b;
    }
}