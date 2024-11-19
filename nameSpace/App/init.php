<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';
// require_once 'services/User.php';

// parameter functionnya bebeas aja
spl_autoload_register(function ( $class ) {
  // App\Produk\User = ["App","Produk","User"];
  $class = explode('\\',$class);
  $class = end($class); //? untuk mengambil bagian akhir dari array
  require_once 'Produk/' . $class . '.php';
});
spl_autoload_register(function ( $class ) {
  // App\Produk\User = ["App","services","User"];
  $class = explode('\\',$class);
  $class = end($class); //? untuk mengambil bagian akhir dari array
  require_once 'services/' . $class . '.php';
});
