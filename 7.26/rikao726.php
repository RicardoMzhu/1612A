<?php
echo day18_2();
function day18_2(){
    $num = 10;
    $er = decbin($num);
    echo substr_count($er,'1'); 
}