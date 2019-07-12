<?php
function calFn($n,$m,$l){
    for($m>1;$m>$n;$m++){
        if($m/1==1||$m%10==1){
            return ++$l;
        }else{
            return $l;
        }
    }
}