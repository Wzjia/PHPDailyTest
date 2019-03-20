<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/3/20
 * Time: 8:44
 */

/*
 * 判断是否为丑数   循环一个数是否能被2,3,5整除 商为1，余数位0  ，是丑数
 *@param $n  int
 *@return  1 2
 */

header("Content-type:text/html;charset=utf8");
function getUngly($n){
    //判断是否可以被2整除
    while ($n%2==0){
        $n = $n/2;
    }
    //判断是否可以被3整除
    while ($n%3==0){
        $n = $n/3;
    }
    //判断是否可以被5整除
    while ($n%5==0){
        $n = $n/5;
    }
    //返回值
    if($n==1){
        return 1;
    }else{
        return 2;
    }
}
//调用函数getUngly
$res = getUngly(14);
if($res==1){
    echo "yes";
}else{
    echo "no";
}