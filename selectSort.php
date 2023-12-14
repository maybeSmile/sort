<?php
/**选择排序**/
$arr = [6,5,7,8,3,1,2];

function test($arr){
    echo implode(',',$arr)."\n";
}

function selectSort($arr){
    $len = count($arr);

    for($i=0;$i<($len-1);$i++){
       $p = $i;

       for($j=$i+1;$j<$len;$j++){
           if($arr[$p] > $arr[$j]){
               $p = $j;
           }
       }

       if($p != $i){
           $tmp = $arr[$p];
           $arr[$p] = $arr[$i];
           $arr[$i] = $tmp;
       }
       test($arr);
    }
    return $arr;
}

print_r(selectSort($arr));
