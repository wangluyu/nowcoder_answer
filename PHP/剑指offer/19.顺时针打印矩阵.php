<!-- 顺时针打印矩阵
时间限制：1秒 空间限制：32768K 热度指数：188967
本题知识点： 数组
题目描述
输入一个矩阵，按照从外向里以顺时针的顺序依次打印出每一个数字，例如，如果输入如下矩阵： 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 则依次打印出数字1,2,3,4,8,12,16,15,14,13,9,5,6,7,11,10. -->
<?php

function printMatrix($matrix)
{
    $arr = array();
    $len = count($matrix);
    for($i = 1;$i<$len;$i++){
        $index = $i - $n;
        if($i - $n<0){//第一行
            $index = $i;
        }else{
            $index = 
        }
    }
}
//https://www.nowcoder.com/practice/9b4c81a02cd34f76be2659fa0d54342a?tpId=13&tqId=11172&rp=1&ru=%2Fta%2Fcoding-interviews&qru=%2Fta%2Fcoding-interviews%2Fquestion-ranking