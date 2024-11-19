<?php
//! konsep class abstract

abstract class Produk {
  private $judul,
          $penulis,
          $penerbit,
          $harga,
          $diskon = 0;

  public function __construct( $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getJudul() {
    return $this->judul;
  }

  public function setJudul($j) {
    if( !is_string($j) ) {
      throw new Exception("Judul harus menggunakan string");
    }
    $this->judul = $j;
  }

  public function setPenulis( $pnls ) {
    $this->penulis = $pnls;
  }

  public function setPenerbit( $pnrt ) {
    $this->penerbit = $pnrt;
  }

  public function setHarga( $h ) {
    $this->harga = $h;
  }

  public function getPenulis() {
    return $this->penulis;
  }

  public function getpenerbit() {
    return $this->penerbit;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  abstract public function getInfoProduk();
  
  public function getInfo() {
    $str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
    return $str;
  }

  public function getHarga() {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function setDiskon( $diskon ) {
    $this->diskon = $diskon;
  }

  public function getDiskon() {
    return $this->diskon;
  }

}

class Komik extends Produk {
  public $jmlHalaman;

  public function __construct( $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0 ) {
    
    parent::__construct( $judul, $penulis, $penerbit, $harga);
    
    $this->jmlHalaman = $jmlHalaman;

  }

  public function getInfoProduk() {

    $str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
    
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
    $str = "Game : ". $this->getInfo() ." - {$this->wktMain} Jam.";

    return $str;
  }

  public function infoHargaGame() {
    return $this->getHarga() - ($this->getHarga() * $this->getDiskon() / 100);
  }
}

class CetakInfoProduk {
  public $daftarProduk = [];

  public function tambahProduk( Produk $produk ) {
    $this->daftarProduk[] = $produk;
  }

  public function cetak() {
    $str = "DAFTAR PRODUK : </br>";

    foreach( $this->daftarProduk as $p ) {
      $str .= "- {$p->getInfoProduk()} </br>";
    }
    return $str;
  }
}

$produk1 = new Komik("Naruto","Masashi Kisimoto","Efraim urel palodang",30000,100);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);
echo $cetakProduk->cetak();