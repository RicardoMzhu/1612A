<?php
$str = [1,2,3,4,5,6];
function str($str){
    $arr1 = [];
    $arr2 = [];
    foreach ($str as $v=>$b){
        if($b%2==1){
             $arr1[]=$b;
        }elseif ($b%2==0){
            $arr2[]=$b;
        }
    }
    return json_encode(array_merge($arr1,$arr2));
}
print_r(str($str));