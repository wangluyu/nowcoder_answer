<!-- 二叉树的镜像
时间限制：1秒 空间限制：32768K 热度指数：109987
题目描述
操作给定的二叉树，将其变换为源二叉树的镜像。
输入描述:
二叉树的镜像定义：源二叉树 
    	    8
    	   /  \
    	  6   10
    	 / \  / \
    	5  7 9 11
    	镜像二叉树
    	    8
    	   /  \
    	  10   6
    	 / \  / \
    	11 9 7  5 -->
<?php

/*class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}*/
function Mirror(&$root)
{
    if($root == NULL){
        return null;
    }
    $left = $root->left;
    $right = $root->right;
    $root->left = Mirror($right);
    $root->right = Mirror($left);
    return $root;
}
// 运行时间：11ms
// 占用内存：2316k