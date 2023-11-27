<?php
function biodatarpl(){
    echo "Nama : Muhammad Dimas Susanto<br>";
    echo "Kelas : XI RPL 1<br>";
    echo "Jurusan : RPL<br><br>";
}

function biodatatkj(){
    echo "Nama : Sofyan Hanif Duri<br>";
    echo "Kelas : XI TKJ 2<br>";
    echo "Jurusan : TKJ<br>";
}

function biodataakl(){
    echo "Nama : Aditya<br>";
    echo "Kelas : XI AKL 1<br>";
    echo "Jurusan : AKL<br>";
}

function biodataotkp(){
    echo "Nama : Naufal<br>";
    echo "Kelas : XI OTKP 1<br>";
    echo "Jurusan : OTKP<br>";
}

function biodatapemasaran(){
    echo "Nama : Fahmi<br>";
    echo "Kelas : XI BR 1<br>";
    echo "Jurusan : BR<br>";
}

function biodatadkv(){
    echo "Nama : Nathan<br>";
    echo "Kelas : XI DKV 1<br>";
    echo "Jurusan : DKV<br>";
}

function biodatato(){
    echo "Nama : Hikmal<br>";
    echo "Kelas : XI TO 1<br>";
    echo "Jurusan : TO<br>";
}

function biodatatm(){
    echo "Nama : Ilham<br>";
    echo "Kelas : XI TM 1<br>";
    echo "Jurusan : TM<br>";
}

function biodatakuliner(){
    echo "Nama : Ahmad<br>";
    echo "Kelas : XI KULINER 1<br>";
    echo "Jurusan : KULINER<br>";
}
function biodatalogistik(){
    echo "Nama : Rafli<br>";
    echo "Kelas : XI TL 1<br>";
    echo "Jurusan : TL<br>";
}

$kelas = "2"; // Ganti dengan kelas yang sesuai
for ($i = 1; $i <= 5; $i++){
if ($kelas == "1") {
    echo "$i <br>"; biodatarpl();
} elseif ($kelas == "2") {
    echo "$i <br>"; biodatatkj();
} elseif ($kelas == "3") {
    echo "$i <br>"; biodataakl();
} elseif ($kelas == "4") {
    echo "$i <br>"; biodataotkp();
} elseif ($kelas == "10") {
    echo "$i <br>"; biodatapemasaran();
} elseif ($kelas == "5") {
    echo "$i <br>"; biodatadkv();
} elseif ($kelas == "8") {
    echo "$i <br>"; biodatato();
} elseif ($kelas == "9") {
    echo "$i <br>"; biodatatm();
} elseif ($kelas == "6") {
    echo "$i <br>"; biodatakuliner();
} elseif ($kelas == "7") {
    echo "$i <br>"; biodatalogistik();
} else {
    echo "Kelas tidak ditemukan.";
}
}