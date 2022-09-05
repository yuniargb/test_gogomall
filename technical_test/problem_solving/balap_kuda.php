<?php
function balap_kuda($total_kuda){
    $sesi_awal = $total_kuda / 5;

    
    $i = 1;
    $sesi_selanjutnya = 0;
    while($i <= $sesi_awal){
        if($i % 2){
            $sesi_selanjutnya++;
            $i +=2;
        }else{
            $sesi_selanjutnya++;
            $i++;
        }
    }
    
    $total_sesi = $sesi_awal + $sesi_selanjutnya;

    echo $total_sesi;
}

balap_kuda(25);


/*
| Penejelasan :
| variable sesi_awal untung menghtiung bagan awal 
| variable sesi_selanjutnya untuk menghitung bagan selanjutnya
*/