<?php
$nilai_awal = 1;
$jumlah_pengurangan = 50; // Ubah sesuai kebutuhan

for ($i = 0; $i < $jumlah_pengurangan; $i++) {
    echo $nilai_awal . " - 1 = " . ($nilai_awal - 1) . "<br>";
    $nilai_awal = $nilai_awal - 1;
}
?>
