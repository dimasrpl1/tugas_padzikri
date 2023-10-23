<?php

$bilangan1 = 10;
$bilangan2 = 10;
$sisi = 5;
$lebar = 10;
$panjang = 5;
$tinggi = 7 ;
$alas = 10;
$jari = 7;
$celcius = 30;
$hasilpenjumlahan;
$hasilpengurangan;
$hasilperkalian;
$hasilpersegi;
$hasilpersegipanjang;
$hasilsegitiga;
$hasiljajargenjang;


$hasilpenjumlahan = $bilangan1 + $bilangan2;
$hasilpengurangan = $bilangan1 - $bilangan2;
$hasilperkalian = $bilangan1 * $bilangan2;
$hasilpembagian = $bilangan1 / $bilangan2;
$hasilpersegi = $sisi * $sisi;
$hasilpersegipanjang = $panjang * $lebar;
$hasilsegitiga = $sisi * $tinggi /2;
$hasillingkarang = 22/7 * $jari * $jari;
$hasilcelciusfarenheit = 9/5 * $celcius + 32;
$hasilcelciusreamur = 4/5 * $celcius;
$hasilcelciuskelvin = $celcius + 273;
$hasilcelciusrankine = ($celcius + 273.15) * 9/5;


echo "Hasil Penjumlahan : $bilangan1 + $bilangan2 = $hasilpenjumlahan <br>";
echo "Hasil Pengurangan: $bilangan1 - $bilangan2 =  $hasilpengurangan <br>";
echo "Hasil Perkalian: $bilangan1 * $bilangan2 =  $hasilperkalian <br>";
echo "Hasil Pembagian: $bilangan1 / $bilangan2 =  $hasilpembagian <br><br>";
echo "RUMUS PERSEGI<br>";
echo "Luas: S x S<br>";
echo "Hasil Persegi: $sisi * $sisi = $hasilpersegi<br><br>";
echo "RUMUS PERSEGI PANJANG<br>";
echo "Luas: P x L<br>";
echo "Hasil Persegi Panjang: $panjang * $lebar = $hasilpersegipanjang<br><br>";
echo "RUMUS SEGITIGA<br>";
echo "Luas: A x T /2<br>";
echo "Hasil Segitiga: $sisi * $tinggi /2 = $hasilsegitiga <br><br>";
echo "RUMUS LINGKARAN <br>";
echo "Luas: 22/7 x r x r<br>";
echo "Hasil Lingkaran: 22/7 * $jari * $jari = $hasillingkarang<br><br>";
echo "RUMUS CELCIUS KE FARENHEIT<br>";
echo "Rumus: (9/5) * Celcius + 32<br>";
echo "Hasil Celcius ke Farenheit = (9/5) * 30 + 32 = $hasilcelciusfarenheit<br><br>";
echo "RUMUS CELCIUS KE REAMUR<br>";
echo "Rumus: (4/5) * Celcius<br>";
echo "Hasil Celcius ke Reamur: (4/5) * 30 = $hasilcelciusreamur<br><br>";
echo "RUMUS CELCIUS KE KELVIN<br>";
echo "Rumus: Celcius + 273<br>";
echo "Hasil Celcius ke Kelvin: 30 + 273 = $hasilcelciuskelvin<br><br>";
echo "RUMUS CELCIUS KE RANKINE<br>";
echo "Rumus: (C + 273.15) * 9/5 <br>";
echo "Hasil Celcius ke Rankine: (30 + 273.15) * 9/5 = $hasilcelciusrankine<br>";