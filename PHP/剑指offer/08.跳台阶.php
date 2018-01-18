<!-- 
跳台阶
时间限制：1秒 空间限制：32768K 热度指数：186090
题目描述
一只青蛙一次可以跳上1级台阶，也可以跳上2级。求该青蛙跳上一个n级的台阶总共有多少种跳法。 -->
<!-- 实际上是斐波那契的变种题目 -->
<?php

function jumpFloor($number)
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

// 运行时间：10ms
// 占用内存：2432k