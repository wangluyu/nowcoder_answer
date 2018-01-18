<!-- 
用两个栈实现队列
时间限制：1秒 空间限制：32768K 热度指数：173668
本题知识点： 队列 栈
题目描述
用两个栈来实现一个队列，完成队列的Push和Pop操作。 队列中的元素为int类型。 -->

<?php
$stack1 = array();//用于push
$stack2 = array();//用于pop
function mypush($node){
    global $stack1;
    global $stack2;
    if(empty($stack2)){
        $stack1[] = $node;
    }else{
        while(!empty($stack2)){
            $stack1[] = array_pop($stack2);
        }
        $stack1[] = $node;
    }
}
function mypop(){
    global $stack1;
    global $stack2;
    if(empty($stack1)){
        return array_pop($stack2);
    }else{
        while(!empty($stack1)){
            $stack2[] = array_pop($stack1);
        }
        return array_pop($stack2);
    }
}

// 运行时间：17ms
// 占用内存：2432k