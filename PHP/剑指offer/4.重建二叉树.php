<!-- 重建二叉树
时间限制：1秒 空间限制：32768K 热度指数：259523
PHP(7.1)
题目描述
输入某二叉树的前序遍历和中序遍历的结果，请重建出该二叉树。假设输入的前序遍历和中序遍历的结果中都不含重复的数字。例如输入前序遍历序列{1,2,4,7,3,5,6,8}和中序遍历序列{4,7,2,1,5,3,8,6}，则重建二叉树并返回。 -->

<?php

/*class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}*/
function reConstructBinaryTree($pre, $vin)
{
    // write code here
    return buildTree($pre, $vin,0,count($pre)-1,0,count($vin)-1);
}
/**
*	$pre:前序
*	$vin:中序
*	$preStart:前序开始位置
*	$preEnd:前序结束位置
*	$vinStart:中序开始位置
*	$vinEnd:中序开始位置
**/
function buildTree($pre,$vin,$preStart,$preEnd,$vinStart,$vinEnd){
    if($preStart > $preEnd || $vinStart > $vinEnd){
        return;
    }
    //查找根节点在中序的位置
    $rootInVin = array_search($pre[$preStart],$vin);
    //左树的长度,用于找右节点
    $leftLen = $rootInVin - $vinStart;
    $tree = new TreeNode($pre[$preStart]);
    $tree->left = buildTree($pre,$vin,$preStart+1,$preStart+$leftLen,$vinStart,$vinStart+$leftLen);
    $tree->right = buildTree($pre,$vin,$preStart+$leftLen+1,$preEnd,$vinStart+$leftLen+1,$vinEnd);
    return $tree;
}

// 运行时间：35ms
// 占用内存：2560k


