<?php
require_once 'App/init.php';

// $produk1 = new Komik("Naruto","Masashi Kisimoto","Efraim urel palodang",30000,100);
// $produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1);
// $cetakProduk->tambahProduk( $produk2);
// echo $cetakProduk->cetak();

// new App\Produk\User();
// echo "<br>";

//! untuk memberikan alias

use App\services\User as serviceUser;
use App\services\User as produkUser;

new serviceUser();
echo "<br>";
new produkUser();