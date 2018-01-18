<!-- 调整数组顺序使奇数位于偶数前面
本题知识点： 数组
题目描述
输入一个整数数组，实现一个函数来调整该数组中数字的顺序，使得所有的奇数位于数组的前半部分，所有的偶数位于位于数组的后半部分，并保证奇数和奇数，偶数和偶数之间的相对位置不变。 -->
<?php

function reOrderArray($array)
{
    $odd = array();//奇数
    $even = array();//偶数
    foreach($array as $num){
        if($num % 2){
            $odd[] = $num;
        }else{
            $even[] = $num;
        }
    }
    return array_merge($odd,$even);
}

// 运行时间：13ms
// 占用内存：3724k