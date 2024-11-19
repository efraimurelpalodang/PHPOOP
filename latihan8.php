<?php
//! ceter dan getter digunakan untuk menghindari saat kita membuat sebuah property dengan visibility public
//? setter dan getter intinya adalah sebuah method untuk save dan get

class Produk {
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

  public function getInfoProduk() {
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

  public function infoHargaGame() {
    return $this->getHarga() - ($this->getHarga() * $this->getDiskon() / 100);
  }

}

$produk1 = new Komik("Naruto","Masashi Kisimoto","Efraim urel palodang",30000,100);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,50);
$produk3 = new Produk("barang baru");

echo $produk1->getInfoProduk();
echo "</br>";
echo $produk2->getInfoProduk();
echo "<hr>";
echo "</br>";
$produk1->setPenulis('Molly Godo kali');
echo $produk1->getPenulis();