<?php
//! object type 

class Produk {
  public  $judul,
          $penulis,
          $penerbit,
          $harga;

  public function __construct( $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0 ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
}

class cetakInfoProduk {
  public function cetak( Produk $produk ) { //? contoh object type
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Naruto","Masashi Kisimoto","Efraim urel palodang",30000);
$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",250000);

$infoproduk1 = new cetakInfoProduk();
echo $infoproduk1->cetak($produk1);

// echo "komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel();