<?php
$nama = "Dzikri";
$uang = 2500000;
$tarif = 100000;
$hasilkembalian = ($uang-$tarif);

echo "====== Tiket Jalan Tol =====<br>";

if ($uang >= 100000) {
    echo "Nama: $nama<br>";
    echo "Selamat datang di Jalan tol Subang-Bandung, Untuk tarifnya $tarif<br>";
    echo "Bayar : $uang<br>";
    echo "Selamat $nama, anda memasuki kawasan Jalan Tol Subang-Bandung<br>";
    echo "Kembalian : $hasilkembalian";
} else {
    echo "Nama: $nama<br>";
    echo "Selamat datang di Jalan tol Subang-Bandung, Untuk tarifnya $tarif<br>";
    echo "Bayar : $uang<br>";
    echo "Maaf maaf saldo anda kurang, mohon untuk top up terlebih dahulu";
}