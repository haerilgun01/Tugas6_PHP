<?php
    // Membuat Fungsi
    function perkenalan($nama, $salam){
        echo $salam.",";
        echo " Perkenalkan, nama saya ".$nama."<br/>";
        echo " Senang berkenalan dengan anda<br/>";
    }

    // Memanggil fungsi yang sudah dibuat
    perkenalan("Usro", "Hai");

    echo "<hr/>";

    $saya = "Bedu";
    $ucapanSalam = "Selamat Pagi";

    // Memanggil lagi
    perkenalan($saya, $ucapanSalam);
?>