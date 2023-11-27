<?php

// $jurusan = array("RPL", "TKJ", "TO", "TM", "DKV");


// echo $jurusan[0] . "<br />";
// echo $jurusan[1] . "<br />";
// echo $jurusan[2] . "<br />";
// echo $jurusan[3] . "<br />";
// echo $jurusan[4] . "<br />";

// $jurusan[] = "AKL";
// $jurusan[] = "TL";
// $jurusan[] = "BDP";
// $jurusan[] = "KL";
// $jurusan[] = "OTKP";

// echo $jurusan[5] . "<br />";
// echo $jurusan[6] . "<br />";
// echo $jurusan[7] . "<br />";
// echo $jurusan[8] . "<br />";
// echo $jurusan[9] . "<br />";


$siswa = array(
    "dimas" => array("nama" => "Dimas", "umur" => "15", "kelas" => "XI RPL 1", "nilai" => "95"),
    "gamal" => array("nama" => "Gamal", "umur" => "17", "kelas" => "XI RPL 1", "nilai" => "10"),
    "zaenal" => array("nama" => "Zaenal", "umur" => "16", "kelas" => "XI RPL 1", "nilai" => "75"),
    "gian" => array("nama" => "Gian", "umur" => "15", "kelas" => "XI RPL 1", "nilai" => "25"),
    "tegar" => array("nama" => "Tegar", "umur" => "16", "kelas" => "XI RPL 1", "nilai" => "65"),
);

$seluruhnama = array_filter($siswa, function($semua){
    return $semua["nama"];
});

echo "Daftar nama siswa : <br />";
foreach ($seluruhnama as $semua => $detail) {
    echo "$semua: umur: {$detail['umur']}, kelas: {$detail['kelas']}, nilai: {$detail['nilai']} <br />";
}

// echo "Nama : " . $siswa["nama"] . "<br />";
// echo "Umur : " . $siswa["umur"] . "<br />";
// echo "Kelas : " . $siswa["kelas"] . "<br />";

// $siswa["nilai"] = 90;
// echo "Nilai : " . $siswa["nilai"] . "<br />";