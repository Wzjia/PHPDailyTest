<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/4/3
 * Time: 8:53
 */

function search($arr,$search){
    $low = 0;
    $height = count($search)-1;

    while ($low<=$height){
        $mid = floor(($low+$height)/2);
        if($arr[$mid] == $search){
            return $mid;
        }elseif ($arr[$mid]<$search){
            $low = $mid+1;
        }elseif ($arr[$mid]>$search){
            $height = $mid-1;
        }
    }
    return "查找错误";
}

function search1($arr,$low,$height,$k){
    while ($low<=$k){
        $mid = floor(($low+$height)/2);
        if($arr[$mid] == $k){
            return $mid;
        }elseif ($arr[$mid]<$k){
            return search1($arr,$low,$mid-1,$k);
        }elseif ($arr[$mid]>$k){
            return search1($arr,$mid+1,$height,$k);
        }
    }
}

$arr = [1,2,3,4,5];
$search = count(0,4,4);