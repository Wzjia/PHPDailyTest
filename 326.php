<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/3/26
 * Time: 8:43
 */

/*
 * @param int $n
 * return $n
 * 求1+2+...+n
 * */
function test(int $n){
    $r = 0;
    $n && ($r+(test($n-1)));
    return $n;
}
echo test(5);