<!-- 从尾到头打印链表
时间限制：1秒 空间限制：32768K 热度指数：394304
本题知识点： 链表
PHP(7.1)
题目描述
输入一个链表，从尾到头打印链表每个节点的值。 -->

<?php

/*class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/
function printListFromTailToHead($head)
{
    // write code here
    if(!$head){
        return [];
    }
    $arr = array();
    while($head){
        $arr[] = $head->val;
        $head = $head->next;
    }
	return array_reverse($arr);
}

// 运行时间：24ms
// 占用内存：2308k