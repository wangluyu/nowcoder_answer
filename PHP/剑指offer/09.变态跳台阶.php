<!-- 变态跳台阶
时间限制：1秒 空间限制：32768K 热度指数：141927
题目描述
一只青蛙一次可以跳上1级台阶，也可以跳上2级……它也可以跳上n级。求该青蛙跳上一个n级的台阶总共有多少种跳法。 -->

<?php

function jumpFloorII($number)
{
    if($number <= 0){
		return 0;
    }elseif($number == 1){
		return 1;
    }else{
        $array = array(1);
        for($i = 1;$i<=$number;$i++){
            $array[$i] = array_sum($array);
        }
        return array_pop($array);
    }
}

// 运行时间：19ms
// 占用内存：2316k