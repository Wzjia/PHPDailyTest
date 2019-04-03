<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/4/3
 * Time: 19:09
 */
//定义一个类
class count{
    function CountSteps($x,$y){
        if($x==0&&$y==0){
            return 0;
        }
        if($x==0||$y==0){
            return 1;
        }
        $total = $this->CountSteps($x-1,$y)+$this->CountSteps($x,$y-1);
        return $total;
    }
}
$model = new count();
$res = $model->CountSteps(1,1);
print_r($res);