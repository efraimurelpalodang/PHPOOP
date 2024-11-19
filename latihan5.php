<?php
//! Inheritance (pewarisan) penyelesaian masalah pada inheritence di latihan4

class Produk {
  public  $judul,
          $penulis,
          $penerbit,
          $harga,
          $jmlHalaman,
          $wktMain;

  public function __construct( $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0, $wktMain = 0 ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->wktMain = $wktMain;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk() {
    $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
    return $str;
  }
}

//! dibawah ini yang buat baru untuk penyelesaian inheritence nya dengan membuat class child menggunakan extends

class Komik extends Produk {
  public function getInfoProduk() {
    $str = "Komik : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    
    return $str;
  }
}

class Game extends Produk {
  public function getInfoProduk() {
    $str = "Game : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->wktMain} Jam.";

    return $str;
  }
}

$produk1 = new Komik("Naruto","Masashi Kisimoto","Efraim urel palodang",30000,100,0,"Komik");
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,0,50,"Game");

echo $produk1->getInfoProduk();
echo "</br>";
echo $produk2->getInfoProduk();