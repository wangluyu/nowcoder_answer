<!-- 矩形覆盖
时间限制：1秒 空间限制：32768K 热度指数：125251
题目描述
我们可以用2*1的小矩形横着或者竖着去覆盖更大的矩形。请问用n个2*1的小矩形无重叠地覆盖一个2*n的大矩形，总共有多少种方法？ -->
<?php

function rectCover($number)
{
    $number++;
    if($number <= 1){
		return 0;
    }elseif($number == 2){
		return 1;
    }else{
        $array = array(1,1);
        for($i = 2;$i<$number;$i++){
            $array[$i] = $array[$i-1] + $array[$i -2];
        }
        return array_pop($array);
    }
}

// 运行时间：13ms
// 占用内存：2432k