<!-- 旋转数组的最小数字
时间限制：3秒 空间限制：32768K 热度指数：235562
本题知识点： 查找
题目描述
把一个数组最开始的若干个元素搬到数组的末尾，我们称之为数组的旋转。 输入一个非递减排序的数组的一个旋转，输出旋转数组的最小元素。 例如数组{3,4,5,1,2}为{1,2,3,4,5}的一个旋转，该数组的最小值为1。 NOTE：给出的所有元素都大于0，若数组大小为0，请返回0。 -->

<?php

function minNumberInRotateArray($rotateArray)
{
    // write code here
    if(empty($rotateArray)){
        return 0;
    }
    return min($rotateArray);
}

// 运行时间：1016ms
// 占用内存：5248k
// 需要优化