<?php
function checkNum($x){
    for($i = 1; $i <= $x; $i++){
        if($i % 15 == 0){
            echo "hello world";
        }else if($i % 3 == 0){
            echo "hello";
        }else if($i % 5 == 0){
            echo "world";
        }else{
            echo $i;
        }
        echo "<br/>";
    }
}

checkNum(100);