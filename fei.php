<?php
/**
 * Created by PhpStorm.
 * User: 学院
 * Date: 2019/3/15
 * Time: 9:02
 */

//循环算法
$arr[1]= 1;
for($i=2;$i<8;$i++){
    @$arr[$i] = $arr[$i-1]+$arr[$i-2];//当前项 = 前第一项 + 前第二项
}
echo join("<br>",$arr);

//递归
class a{
    static  public  function a ($n){
        if($n == 0|| $n==1){
            return 1;
        }
        return a($n-1)+a($n-2);
    }
}
for($i=0;$i<8;++$i){
    echo "<br>".a($i).'<br>';
}

