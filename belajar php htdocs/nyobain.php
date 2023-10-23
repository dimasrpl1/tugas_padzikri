<?php
spl_autoload_register(function($class){
require_once __DIR__. '/Produk/'. $class . '.php';
});

$produk1 = new Komik("Naruto", "Masasi Kishimoto", 30000, 100);
echo $produk1->getInfoProduk();
echo'<br>';
$produk2 = new Game("Uncharted", "Neil Druckmann", 250000, 50);
echo $produk2->getInfoProduk();
?>