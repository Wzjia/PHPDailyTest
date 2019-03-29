<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/3/29
 * Time: 8:41
 */
function FirstNotRepeatingChar($str)  {
    $lenth = strlen($str);
    if($lenth == 0){
        return -1;
    }
    For($i=0;$i<$lenth;$i++){
        $arr = [];
        Array_push($arr,$str[$i]);
    }
    For($i=0;$i<$lenth;$i++){
        $count = count($arr);
        For($j=0;$j<$arr;$j++){
            If($arr){
                $str[$i]=$arr[$j];
                $count++;
            }
            if($arr){
                $str[$i] =$arr[$j];
                $re = $count;
            }
        }
    }
    return $re;

}
echo FirstNotRepeatingChar('aaadsdsdsd');

