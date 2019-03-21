<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/3/21
 * Time: 8:43
 */

/*
 *@param  int  $n,$m
 *@return  $last
 * */
function getChild($n,$m){
    if($n==0 || $m==0){
        return -1;
    }
    $last = 0;
    for ($i=1;$i<=$n;$i++){
        $last = ($last+$m)%$i;
    }
    return $last;
}
$n = 1;
$m = 8;
$res= getChild($n,$m);
echo $res;