<?php
//! Inheritance (pewarisan) & problem

class Produk {
  public  $judul,
          $penulis,
          $penerbit,
          $harga,
          $jmlHalaman,
          $wktMain,
          $type;

  public function __construct( $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0, $wktMain = 0, $type = 'type' ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->wktMain = $wktMain;
    $this->type = $type;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap() {
    $str = "{$this->type} : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) - ";
    if( $this->type == "Komik" ) {
      $str .= "{$this->jmlHalaman} Halaman.";
    } else if( $this->type == "Game" ) {
      $str .= "{$this->wktMain} Jam.";
    }
    return $str;
  }
}

class cetakInfoProduk {
  public function cetak( Produk $produk ) { //? contoh object type
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Naruto","Masashi Kisimoto","Efraim urel palodang",30000,100,0,"Komik");
$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",250000,0,50,"Game");

echo $produk1->getInfoLengkap();
echo "</br>";
echo $produk2->getInfoLengkap();