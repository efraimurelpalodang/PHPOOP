<?php
require_once 'App/init.php';

$produk1 = new Komik("Naruto","Masashi Kisimoto","Efraim urel palodang",30000,100);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);
echo $cetakProduk->cetak();