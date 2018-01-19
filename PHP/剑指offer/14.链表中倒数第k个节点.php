<!-- 链表中倒数第k个节点
时间限制：1秒 空间限制：32768K 热度指数：277854
本题知识点： 链表
题目描述
输入一个链表，输出该链表中倒数第k个结点。 -->
<?php
/*class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/
function FindKthToTail($head, $k)
{
    $temp = $head;
    while($temp){
        $total++;
        $temp = $temp->next;
    }
    if($k > $total){
        return 0;
    }else{
        for($i=0;$i<$total-$k;$i++){
            $head = $head->next;
        }
        return $head;
    }
}

// 运行时间：11ms
// 占用内存：2316k