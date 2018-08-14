<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 14.08.2018
 * Time: 22:41
 */

namespace Iroms\Strategy;


interface OperationInterface
{
    public function calc(int $a, int $b): int;
}