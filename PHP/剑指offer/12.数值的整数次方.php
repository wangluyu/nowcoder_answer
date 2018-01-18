<!-- 数值的整数次方
题目描述
给定一个double类型的浮点数base和int类型的整数exponent。求base的exponent次方。 -->
<?php

function Power($base, $exponent)
{
	$num = 1;
    if($exponent>0){
        while($exponent-- > 0){
            $num *= $base;
        }
    }else{
        while($exponent++ < 0){
            $num /= $base;
        }
    }
    return $num;
	// 运行时间：12ms
	// 占用内存：2432k

    //直接用函数
    //return pow($base,$exponent);
    // 运行时间：10ms
	// 占用内存：3840k
}