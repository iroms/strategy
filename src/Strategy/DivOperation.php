<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 14.08.2018
 * Time: 22:51
 */

namespace Iroms\Strategy;


class DivOperation implements OperationInterface
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     * @throws \Exception
     */
    public function calc(int $a, int $b): int
    {
        if (!$b)
            throw new \Exception('division by zero');
        return floor ($a / $b);
    }
}