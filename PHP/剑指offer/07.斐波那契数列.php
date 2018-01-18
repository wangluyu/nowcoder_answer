<!-- 
斐波那契数列
时间限制：1秒 空间限制：32768K 热度指数：236630
 算法知识视频讲解
题目描述
大家都知道斐波那契数列，现在要求输入一个整数n，请你输出斐波那契数列的第n项。
n<=39 
在数学上，斐波纳契数列以如下被以递归的方法定义：F0=0，F1=1，Fn=Fn-1+Fn-2（n>=2，n∈N*）
-->
<?php

function Fibonacci($n)
{
	//递归
	//运行超时:您的程序未能在规定时间内运行结束，请检查是否循环有错或算法复杂度过大。
    // if($n <= 0){
    //     return 0;
    // }
    // if($n == 1 || $n == 2){
    //     return 1;
    // }
    // return (Fibonacci($n-1) + Fibonacci($n-2));

    //非递归
    if($n <= 0){
		return 0;
    }elseif($n == 1 || $n == 2){
		return 1;
    }else{
        $array = array(1,1);
        for($i = 2;$i<$n;$i++){
            $array[$i] = $array[$i-1] + $array[$i -2];
        }
        return array_pop($array);
    }
}

// 运行时间：11ms
// 占用内存：3840k