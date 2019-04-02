<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/4/2
 * Time: 8:40
 */
/*
 * @param  $n  int
 * @retrun $m
 */
function NumberOf1($n){
    $m = decbin($n);//十进制转二进制
    return substr_count($m,1);
}
$n = 21;
print_r(NumberOf1($n));
