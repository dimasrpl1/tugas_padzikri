<?php

function sayHello($namaDepan = "dimas", $namaBelakang = "Susanto") {
    echo "helo $namaDepan $namaBelakang <br />";
}

sayHello(); // manggil function

function tambah(int $nomorSatu,int $nomorDua){
    $total = $nomorSatu + $nomorDua;
    echo "$nomorSatu + $nomorDua = $total<br>";
}
tambah(7, 10);

function tambahSemua(...$angka){
    $total = 0;
    foreach ($angka as $nomor){
        $total += $nomor;
    }
    echo $total . "<br>";
}

tambahSemua(1, 2, 3, 4, 5);

echo "<h1>Studi Kasus</h1>";

// PERSEGI
echo "<h3>Persegi</h3>";
function luasPersegi($sisi){
    $luas = $sisi * $sisi;
    return $luas;
}
function kelilingPersegi($sisi){
    $rumus = 4 * $sisi;
    return $rumus;
}

$sisiPersegi = 5;

echo "Luas Persegi dengan sisi $sisiPersegi adalah " . luasPersegi($sisiPersegi) . "<br>";
echo "Keliling persegi dengan sisi $sisiPersegi adalah " . kelilingPersegi($sisiPersegi) . "<br><br>";

// PERSEGI PANJANG
echo "<h3>Persegi Panjang</h3>";
function luasPersegiPanjang($panjang, $lebar){
    $luas = $panjang * $lebar;
    return $luas;
}
function kelilingPersegiPanjang($panjang, $lebar){
    $rumus = 2 * ($panjang + $lebar);
    return $rumus;
}

$panjang = 6;
$lebar = 4;
echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah ". luasPersegiPanjang($panjang, $lebar) . "<br>";
echo "keliling persegi panjang dengan panjang $panjang dan lebar $lebar adalah ". kelilingPersegiPanjang($panjang, $lebar) . "<br><br>";

// LINGKARAN
echo "<h3>Lingkaran</h3>";
function luasLingkaran($jarijari) {
    $luas = M_PI * $jarijari * $jarijari;
    return $luas;
}
function kelilingLingkaran($jarijari) {
    $rumus = M_PI * (2 * $jarijari);
    return $rumus;
}

$jarijari = 7;
echo "Luas Lingkaran dengan jari jari $jarijari adalah " . luasLingkaran($jarijari) . "<br>";
echo "Keliling Lingkaran dengan jari jari $jarijari adalah " . kelilingLingkaran($jarijari) . "<br><br>";

//SEGITIGA
echo "<h3>Segitiga</h3>";
function luasSegitiga($alas, $tinggi){
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}
function kelilingSegitiga($alas, $sisiSatu, $sisiDua){
    $rumus = $alas + $sisiSatu + $sisiDua;
    return $rumus;
}

$alasSegitiga = 8;
$tinggiSegitiga = 5;
$sisiSatu = 5;
$sisiDua = 5;


echo "Luas Segitga dengan alas $alasSegitiga dan tinggi $tinggiSegitiga adalah " . luasSegitiga($alasSegitiga, $tinggiSegitiga) . "<br>";
echo "keliling Segitga dengan alas $alasSegitiga dan sisi $sisiSatu dan sisi $sisiDua  adalah " . kelilingSegitiga($alasSegitiga, $sisiSatu, $sisiDua) . "<br><br>";


// JAJAR GENJANG
echo "<h3>Jajar Genjang</h3>";
function luasJajargenjang($alas, $tinggi){
    $luas = $alas * $tinggi;
    return $luas;
}
function kelilingJajargenjang($alas, $tinggi){
    $rumus = 2 * ($alas + $tinggi);
    return $rumus;
}

$alasJajargenjang = 9;
$tinggiJajargenjang = 6;


echo "Luas Jajar Genjang dengan alas $alasJajargenjang dan tinggi $tinggiJajargenjang adalah " . luasJajargenjang($alasJajargenjang, $tinggiJajargenjang) . "<br>";
echo "keliling Jajar Genjang dengan alas $alasJajargenjang dan tinggi $tinggiJajargenjang adalah " . kelilingJajargenjang($alasJajargenjang, $tinggiJajargenjang) . "<br>";

?>