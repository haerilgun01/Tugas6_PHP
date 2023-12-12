<?php
    // Membuat Fungsi
    function perkenalan($nama, $salam="Assalamu'alaikum"){
        echo $salam.", ";
        echo " Perkenalkan, nama saya ".$nama."<br/>";
        echo " Senang berkenalan dengan anda<br/>";
    }

    // Memanggil fungsi yang sudah dibuat
    perkenalan("Jarwo", "Hi");

    echo "<hr/>";

    $saya = "Bambang";
    $ucapanSalam = "Selamat Pagi";

    // Memanggil lagi
    perkenalan($saya);
?>