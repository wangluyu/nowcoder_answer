<!-- 
二维数组中的查找
时间限制：1秒 空间限制：32768K 热度指数：520582
本题知识点： 查找
题目描述
在一个二维数组中，每一行都按照从左到右递增的顺序排序，每一列都按照从上到下递增的顺序排序。请完成一个函数，输入这样的一个二维数组和一个整数，判断数组中是否含有该整数。
 -->
<?php

	function Find($target, $array){
	    // write code here
	    foreach($array as $k => $v){
	        if(in_array($target,$v)){
	            return true;
	        }
	    }
	    return false;
	}