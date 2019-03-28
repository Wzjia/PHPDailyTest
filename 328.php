<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/3/28
 * Time: 8:46
 */
function FindNumbersWithSum($array, $sum)  {
    $len = count($sum);
    if($len <2 || $len ==0){
        return false;
    }
    $list =0;
    $array = array();
    $start = 0;
    $end = 1;
    while ($array[$start] && $array[$end] ==0){
        if($array[$start] && $array[$end] ==0){
            array_push($array[$start]);
            array_push($array[$end]);
            return $list;
        }
            if($array[$start] && $array[$end] <0){
            $array[$start];
            $start++;
            }
            if($array[$start] && $array[$end] >0){
                $array[$end];
                $end--;
            }
    }
    return $list;
}
echo FindNumbersWithSum(array(1,2,3,5),7);

