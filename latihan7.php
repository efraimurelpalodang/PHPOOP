<?php
//! Visibility
// Public dapat di akses dimana saja
// protected hanya dapat di akses oleh classnya dan clid turunannya saja
// private hanya dapat di akses oleh classnya saja

class Produk {
  public  $judul,
          $penulis,
          $penerbit;

  protected $diskon = 0;

  private $harga;

  public function __construct( $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk() {
    $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
    return $str;
  }

  public function tampilHarga() {
    return $this->harga;
  }

}

class Komik extends Produk {
  public $jmlHalaman;

  public function __construct( $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0 ) {
    
    parent::__construct( $judul, $penulis, $penerbit, $harga);
    
    $this->jmlHalaman = $jmlHalaman;

  }

  public function getInfoProduk() {

    $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
    
    return $str;
  }
}

class Game extends Produk {
  public $wktMain;

  public function __construct( $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $wktMain = 0 ) {
    
    parent::__construct( $judul, $penulis, $penerbit, $harga);
    
    $this->wktMain = $wktMain;
  }

  public function getInfoProduk() {
    $str = "Game : ". parent::getInfoProduk() ." - {$this->wktMain} Jam.";

    return $str;
  }

  public function setDiskon( $diskon ) {
    $this->diskon = $diskon;
  }

  public function infoHargaGame() {
    return $this->tampilHarga() - ($this->tampilHarga() * $this->diskon / 100);
  }

}

$produk1 = new Komik("Naruto","Masashi Kisimoto","Efraim urel palodang",30000,100);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,50);

echo $produk1->getInfoProduk();
echo "</br>";
echo $produk2->getInfoProduk();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->infoHargaGame();
