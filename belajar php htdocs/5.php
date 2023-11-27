<?php
$nama = "Dzikri";
$umur = 10;
$tiket = 3;

echo "===============STADION GELORA BUNG KARNO===============<br>";
echo "=----------------INDONESIA VS ARGENTINA----------------=<br>";
echo "========================================================<br>";
echo "Nama : $nama <br>";
echo "Umur : $umur <br>";

if ($umur <= 9) {
    echo "Mohon maaf, Anda tidak memenuhi syarat untuk memasuki stadion<br>";
} else {
    echo "Silahkan pilih tiket<br>";
    echo "1. VVIP<br>";
    echo "2. VIP<br>";
    echo "3. REGULER<br>";
    echo "Pilih tiket : $tiket <br>";
    
    if ($tiket == 1) {
        echo "Selamat, Anda akan menonton pada tribun VVIP";
    } elseif ($tiket == 2) {
        echo "Selamat, Anda akan menonton pada tribun VIP";
    } elseif ($tiket == 3) {
        echo "Selamat, Anda akan menonton pada tribun REGULER";
    } else {
        echo "Mohon pilih tiket yang valid (1, 2, atau 3)";
    }
}