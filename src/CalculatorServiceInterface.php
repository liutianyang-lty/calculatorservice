<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/6/5 0005
 * Time: 21:06
 */

interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;

    public function minus(int $a, int $b): int;
}