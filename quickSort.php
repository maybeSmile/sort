<?php
/**快速排序**/
$arr = [6,5,7,8,3,1,2];

function test($arr){
    //测试每次排序逻辑
    echo implode(',',$arr)."\n";
}

function quickSort($arr){
    if(!is_array($arr)){
        return false;
    }

    $len = count($arr);

    if($len <= 1){
        return $arr;
    }

    $left = $right = array();

    for($i=1;$i<$len;$i++){
        if($arr[$i] < $arr[0]){
            $left[] = $arr[$i];
        }else{
            $right[] = $arr[$i];
        }
    }

    $left = quickSort($left);
    $right = quickSort($right);
   
    return array_merge($left,array($arr[0]),$right);
}

print_r(quickSort($arr));
