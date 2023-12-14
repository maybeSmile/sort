<?php
$arr = [6,5,7,8,3,1,2];

function test($arr){
    //测试每次排序逻辑
    echo implode(',',$arr)."\n";
}

function bubbleSort($arr){
    $len = count($arr);

    for($i=1;$i<$len;$i++){
        for($k=0;$k<($len-$i);$k++){
            if($arr[$k] > $arr[$k+1]){
                $tmp = $arr[$k];
                $arr[$k] = $arr[$k+1];
                $arr[$k+1] = $tmp;
            }
        }
        test($arr);
    }
    return $arr;
}

print_r(bubbleSort($arr));
