<?php
// Membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalamu'alaikum"){
    echo $salam.", ";
    echo " Perkenalkan, nama saya ".$nama."<br/>";
    // Memanggil fungsi lain
    echo "Saya berusia ".hitungUmur(1994, 2015)." tahun<br/>";
    echo " Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi yang sudah dibuat
perkenalan("Ardianta");
?>