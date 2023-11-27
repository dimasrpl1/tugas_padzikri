<?php

$nomor = array(1, 2, "dimasss", 4, 5);
$nomordua =  array("haidar", 7, 8, "pasha", 10, "dimas");

echo count($nomor) . "<br />";
echo count($nomordua) . "<br />";
echo $nomor[0] . "<br />";
echo $nomordua[3] . "<br />";

$nomor[2] = "hadiarr";

echo $nomor[4] . "<br />";

// nomor 1

$nilai = [90, 85, 78, 95, 88];
echo "Banyaknya nilai: " . count($nilai) . "<br />";

array_push($nilai, 92);
echo "Setelah penambahan nilai: " . implode(", ", $nilai) . "<br />";

$removedValue = array_pop($nilai);
echo "Nilai yang dihapus: " . $removedValue . "<br />";

$newArray = array_slice($nilai, 0, 3);
echo "tiga nilai pertama: " . implode(", ", $newArray) . "<br />";

// map
$nilai_siswa = array(
    "Andi" => 85,
    "Budi" => 72,
    "Agus" => 90,
    "Dodi" => 65
);

// nomor 2 : menentukan jumlah siswa yang mendapatkan nilai di atas 70

$siswa_diatas_70 = array_filter($nilai_siswa, function($nilai){
    return $nilai > 70;
});
echo "Jumlah siswa yang mendapatkan nilai di atas 70: " . count($siswa_diatas_70) . "<br />";

// menentukan nilai tertinggi dan terendah

$nilai_tertinggi = max($nilai_siswa);
$nilai_terrendah = min($nilai_siswa);
echo "Nilai tertinggi : $nilai_tertinggi, Nilai terendah : $nilai_terrendah" . "<br />";

// menampilkan semua nilai siswa
foreach ($nilai_siswa as $nama => $nilai) {
    echo "$nama: $nilai <br />";
}

// nomor 3
$barang = array(
    "Laptop" => array("harga" => 8_000_000, "stok" => 10),
    "Smartphone" => array("harga" => 12_000_000, "stok" => 15),
    "Kamera" => array("harga" => 12_000_000, "stok" => 5),
);

// menampilkan barang yang harganya lebih dari 500ribu

$barang_diatas_500k = array_filter($barang, function($item){
    return $item["harga"] > 500_000;
});

echo "Daftar barang yang harganya di atas 500 ribu : <br />";
foreach ($barang_diatas_500k as $nama => $detail) {
    echo "$nama: Harga: {$detail['harga']}, stok: {$detail['stok']} <br />";
}

// menampilkan total nilai iventaris

$total_iventaris = array_sum(array_map(function($item){
    return $item["harga"] * $item["stok"];
}, $barang));
echo "Total nilai iventaris: $total_iventaris <br />";

//nomor 4
$jadwal_acara = array(
    "Sesi 1" => "Pendaftaran",
    "Sesi 2" => "Pembukaan",
    "Sesi 3" => "Presentasi",
    "Sesi 4" => "Istirahat",
    "Sesi 5" => "Workshop",
);

ksort($jadwal_acara);
echo "Jadwal Acara: <br />";
foreach($jadwal_acara as $sesi => $acara) {
    echo "$sesi : $acara <br />";
}

// menghitung total sesi yang ada
$total_sesi = count($jadwal_acara);
echo "Total Sesi : $total_sesi <br />";