<?php

function faktorial($angka){
    if($angka < 2){
        return 1;
    } else {
        // Memanggil dirinya sendiri
        return ($angka * faktorial($angka - 1));
    }
}

// Memanggil fungsi
echo "faktorial 5 adalah ".faktorial(5);

?>