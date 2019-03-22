<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/3/22
 * Time: 8:45
 */


/*
 * @implode  将字符串转连接成数组
 * @param  int $num
 * @return $str
 */
Class Result{
    Function number($str)
    {
        $num = count($str);
        For ($i = 0; $i < $num; $i++) {
            For ($j = 0; $j < $num - 1 - $i; $i++) {
                If ($this->esc($str[$j],$str[$j-1])) {
                    $temp = $str[$j];
                    $str[$j] = $str[$j - 1];
                    $str[$j - 1] = $temp;
                }
            }
            Return implode('', $str);
        }
    }

        Function esc($a,$b){
            $aa = $a.$b;
            $bb = $b.$a;
            return $aa>$bb;
        }
}
    $model = new Result();
    $arr = array(3,4,5);
    $res = $model->number($arr);
    echo $res;