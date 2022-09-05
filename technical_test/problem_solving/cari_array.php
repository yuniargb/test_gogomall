<?php
function cariArray($arr,$search){
    $result = false;
    $result_val = null;
    foreach($arr as $i => $val){
        if($val == $search){
            $result = true;
            $result_val = $i;
            break;
        }
    }

    if($result){
        echo $result_val;
    }else{
        echo -1;
    }
}

$param_arr = [3,2,1,5,4,6,8];
$param_find = 5;
cariArray($param_arr,$param_find);