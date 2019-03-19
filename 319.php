<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/3/19
 * Time: 8:42
 */

/*
 * substr_count 截取的长度
 * @param int $i
 * @return $num
 */
function getnum($m,$n){
    $num = 0;
    for($i=$m;$i<=$n;$i++){
        $sum = substr_count($i,1);
        $num +=$sum;
    }
    return $num;
}
$res = getnum(1,100);//1-100之间1存在的个数
echo $res;