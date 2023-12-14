<?php
/**插入排序**/
$arr = [6,5,7,8,3,1,2];

function test($arr){
    echo implode(',',$arr)."\n";
}

function insertSort($arr){
    $len = count($arr);

    for($i=1;$i<$len;$i++){
        $tmp = $arr[$i];

       for($j=$i-1;$j>=0;$j--){
            if($tmp < $arr[$j]){
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $tmp;
            }else{
                break;
            }
       }
       test($arr);
    }
    return $arr;
}

print_r(insertSort($arr));
