<!-- 
合并两个排序的链表
时间限制：1秒 空间限制：32768K 热度指数：187079
本题知识点： 链表
题目描述
输入两个单调递增的链表，输出两个链表合成后的链表，当然我们需要合成后的链表满足单调不减规则。 -->
<?php
/*class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/
function Merge($pHead1, $pHead2)
{
    if(!$pHead1){
        return $pHead2;
    }
    if(!$pHead2){
        return $pHead1;
    }
    $pMerge = new ListNode(null);
    if($pHead1->val < $pHead2->val){
        $pMerge = $pHead1;
        $pMerge->next = Merge($pHead1->next, $pHead2);
    }else{
        $pMerge = $pHead2;
        $pMerge->next = Merge($pHead1, $pHead2->next);
    }
    return $pMerge;
}

// 运行时间：11ms
// 占用内存：2316k