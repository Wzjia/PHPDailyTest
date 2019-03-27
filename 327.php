<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/3/27
 * Time: 8:41
 */
/*
 * 写一个函数，求两个整数之和，要求在函数体内不得使用+、-、*、/四则运算符号
 * @param  $num1,$num2   int
 * return $ar;
 */
function adds($num1,$num2){
    $ar[] = $num1;
    $ar[] = $num2;
    return array_sum($ar);
}
$num1 = 10;
$num2 =20;
echo adds($num1,$num2);