<!-- 反转链表
时间限制：1秒 空间限制：32768K 热度指数：196410
本题知识点： 链表
题目描述
输入一个链表，反转链表后，输出链表的所有元素。 -->
<?php
/*class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/
function ReverseList($pHead)
{
    if(!$pHead){
        return null;
    }
    $pre = null;
    while($pHead){
        $tmp = $pHead->next;
        $pHead->next = $pre;
        $pre = $pHead;
        $pHead = $tmp;
    }
    return $pre;
}
// 运行时间：10ms
// 占用内存：2304k