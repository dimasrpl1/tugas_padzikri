<?php

echo "Nama  : Muhammad Dimas Susanto<br>";
echo "Kelas : XI RPL 1<br><br><br>";
echo "============= TOKOH IT =============<br>";
echo "Nomor 1<br>";
$nama = "Mark Elliot Zuckerberg";
$ttl = "14 MEI 1984";
$alamat = "California,AS";
$pekerjaan = "Pengusaha Teknologi";
$tahun = "2004 - Sekarang";
echo "Nama : $nama<br>";
echo "Lahir : $ttl<br>";
echo "Alamat : $alamat<br>";
echo "Pekerjaan : $pekerjaan<br>";
echo "Tahun Aktif : $tahun<br><br><br>";


echo "Nomor 2<br>";
echo "============= MENGHITUNG UMUR =============<br>";
$nama = "M.Dimas Susanto";
$ttl = 2007;
$tahun = 2023;
$pengurangan = $tahun - $ttl;
echo "Nama : $nama<br>";
echo "Tahun Lahir : $ttl<br>";
echo "Umur $nama Adalah : $pengurangan<br><br><br>";


echo "Nomor 3<br>";
echo "============= MENGHITUNG NILAI RATA-RATA =============<br>";
$nama = "Dzikri";
$nilai1 = 100;
$nilai2 = 90;
$nilai3 = 90;
$hasil = $nilai1 + $nilai2 + $nilai3;
$rata = $hasil / 3;
echo "Nama : $nama<br>";
echo "Nilai Harian Ke 1 : $nilai1<br>";
echo "Nilai Harian Ke 2 : $nilai2<br>";
echo "Nilai Harian Ke 3 : $nilai3<br>";
echo "Nilai Rata - Rata $nama Adalah : $rata<br><br><br>";


echo "Nomor 4<br>";
echo "============= MASUK TIKET DUFAN =============<br>";
$uang = 49000;
$nama = "Dzikri";
$harga = 50000;
$kata = "Selamat Datang Di Dufan, Untuk Masuk Ke Dalam Harganya Rp.$harga";
echo "Nama : $nama<br>";
echo "$kata<br>";
echo "Uang Kamu : Rp.$uang<br>";
if ($uang > 49999){
echo ("Selamat $nama Kamu Bisa Memasuki Kawasan Dufan, Selamat Bersenang - Senang<br>");
}else if($uang < 50000){
echo ("Maaf $nama Kamu Tidak Bisa Masuk Dufan, Untuk Harga Tiketnya Rp.$harga<br><br><br>");
}


echo "Nomor 5<br>";
echo "Bagian A<br>";
echo "============= STADION GELORA BUNG KARNO =============<br>";
echo "============== INDONESIA VS ARGENTINA ================<br>";
$umur = 7;
$nama ="Dzikri";

echo "Nama : $nama<br>";
echo "Umur : $umur<br>";
if ($umur > 9){
echo ("Selamat $nama Menonton Pada Tribun VVIP<br>");
}else if($umur < 10){
echo ("Mohon Maaf $nama Kamu Tidak Memenuhi Syarat Memasuki Stadion<br><br><br>");
}

echo "Bagian B<br>";
echo "============= STADION GELORA BUNG KARNO =============<br>";
echo "============== INDONESIA VS ARGENTINA ================<br>";
$umur = 20;
$nama ="Dzikri";
$pilih_tiket = 1;
$t1 = "VVIP";
$t2 = "VIP";
$t3 = "REGULER";
$t4 = "Tidak Ada";
echo "Nama : $nama<br>";
echo "Umur : $umur<br>";
echo "Silahkan Pilih Tiket :<br>";
echo "1. $t1<br>";
echo "2. $t2<br>";
echo "3. $t3<br>";
#bagiantiket
if ($pilih_tiket < 2){
echo ("Pilih Tiket : $pilih_tiket<br>");
echo ("Selamat $nama Menonton Pada Tribun VVIP<br><br>");
}else if ($pilih_tiket < 3){ 
echo ("Pilih Tiket : $pilih_tiket<br>");
echo ("Selamat $nama Menonton Pada Tribun VIP<br><br>");
}else if ($pilih_tiket < 4){ 
echo ("Pilih Tiket : $pilih_tiket<br>");
echo ("Selamat $nama Menonton Pada Tribun REGULER<br><br>");
}else if ($pilih_tiket > 3){
echo ("Pilih Tiket : $pilih_tiket<br>");
echo ("Maaf Tiket Tidak Ada<br><br>");
}
#umur
if ($umur > 9){
echo ("<br>");
}else if($umur < 10){
echo ("Mohon Maaf $nama Kamu Tidak Memenuhi Syarat Memasuki Stadion<br><br>");
}

echo "Nomor 6<br>";
echo "============= TOKOH IT =============<br>";
$nama = "Elon Reeve Musk";
$ttl = "28 JUNI 1971";
$alamat = "Los Angeles,AS";
$pekerjaan = "Pengusaha Teknologi";
$tahun = "1995 - Sekarang";
echo "Nama : $nama<br>";
echo "Lahir : $ttl<br>";
echo "Alamat : $alamat<br>";
echo "Pekerjaan : $pekerjaan<br>";
echo "Tahun Aktif : $tahun<br><br><br>";

echo "Nomor 7<br>";
echo "============= MENGHITUNG MASA KERJA =============<br>";
$nama = "Dzikri";
$umur1 = 20;
$umur2 = 65;
$pengurangan = $umur2 - $umur1;
echo "Nama : $nama<br>";
echo "Umur : $umur<br>";
echo "Masa Kerja $nama Tersisa: $pengurangan Tahun Lagi<br><br><br>";

echo "Nomor 8<br>";
echo "============= MENGHITUNG UPAH KERJA =============<br>";
$nama = "Dzikri";
$gaji_pokok = 1000000;
$tunjangan = 500000;
$potongan = 300000;
$hasil = $gaji_pokok + $tunjangan - $potongan;
echo "Nama : $nama<br>";
echo "Gaji Pokok : Rp.$gaji_pokok<br>";
echo "Tunjangan : Rp.$tunjangan<br>";
echo "Potongan : Rp.$potongan<br>";
echo "Upah Bersih Yang Diterima Dzikri Adalah Rp.$hasil<br><br><br>";

echo "Nomor 9<br>";
echo "============= MENGHITUNG TARIF TOL =============<br>";
$bayar = 99999;
$kurangi = $bayar - 100000;
echo "Selamat Datang Di Jalan Tol Subang - Bandung<br>";
echo "Untuk Bayar Tarifnya Rp100.000<br>";
echo "Bayar : Rp.$bayar<br>";
if ($bayar > 99999){
echo ("Selamat Anda Memasuki Kawasan Jalan Tol Subang - Bandung.<br>");
echo "Kembalian : Rp.$kurangi";
}else{ 
echo ("Mohon Maaf Saldo Anda Kurang, Mohon Untuk TopUp Terlebih Dahulu.<br>");
}

echo "Nomor 10<br>";
echo "Bagian A<br>";
echo "============= STADION GELORA BUNG KARNO =============<br>";
echo "============== INDONESIA VS ARGENTINA ================<br>";
$umur = 7;
$nama ="Dzikri";

echo "Nama : $nama<br>";
echo "Umur : $umur<br>";
if ($umur > 9){
echo ("Selamat $nama Menonton Pada Tribun VVIP<br>");
}else if($umur < 10){
echo ("Mohon Maaf $nama Kamu Tidak Memenuhi Syarat Memasuki Stadion<br><br><br>");
}

echo "Bagian B<br>";
echo "============= STADION GELORA BUNG KARNO =============<br>";
echo "============== INDONESIA VS ARGENTINA ================<br>";
$umur = 20;
$nama ="Dzikri";
$pilih_tiket = 1;
$t1 = "VVIP";
$t2 = "VIP";
$t3 = "REGULER";
$t4 = "Tidak Ada";
echo "Nama : $nama<br>";
echo "Umur : $umur<br>";
echo "Silahkan Pilih Tiket :<br>";
echo "1. $t1<br>";
echo "2. $t2<br>";
echo "3. $t3<br>";
#bagiantiket
if ($pilih_tiket < 2){
echo ("Pilih Tiket : $pilih_tiket<br>");
echo ("Selamat $nama Menonton Pada Tribun VVIP<br><br>");
}else if ($pilih_tiket < 3){ 
echo ("Pilih Tiket : $pilih_tiket<br>");
echo ("Selamat $nama Menonton Pada Tribun VIP<br><br>");
}else if ($pilih_tiket < 4){ 
echo ("Pilih Tiket : $pilih_tiket<br>");
echo ("Selamat $nama Menonton Pada Tribun REGULER<br><br>");
}else if ($pilih_tiket > 3){
echo ("Pilih Tiket : $pilih_tiket<br>");
echo ("Maaf Tiket Tidak Ada<br><br>");
}
#umur
if ($umur > 9){
echo ("<br>");
}else if($umur < 10){
echo ("Mohon Maaf $nama Kamu Tidak Memenuhi Syarat Memasuki Stadion<br><br>");
}

?>