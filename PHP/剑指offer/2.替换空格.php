<!-- 替换空格
时间限制：1秒 空间限制：32768K 热度指数：454485
本题知识点： 字符串
题目描述
请实现一个函数，将一个字符串中的空格替换成“%20”。例如，当字符串为We Are Happy.则经过替换之后的字符串为We%20Are%20Happy。 -->

<?php
function replaceSpace($str)
{
    // write code here
    return str_replace(' ','%20',$str);
}