<?php
//! Overriding

class Produk {
  public  $judul,
          $penulis,
          $penerbit,
          $harga;

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
}

//! overiding digunakan untuk memanggil methode parentnya ketika nama method parentnya sama dengan nama method child nya

//? seperti parent::getInfoProduk() dibawah ini
//? seperti parent::__con() ditruct agar tidak mengulang-ngulang mengisi nilainya jadi digunakan itu

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
}

// class cetakInfoProduk {
//   public function cetak( Produk $produk ) { 
//     $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
//     return $str;
//   }
// }

$produk1 = new Komik("Naruto","Masashi Kisimoto","Efraim urel palodang",30000,100);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,50);

echo $produk1->getInfoProduk();
echo "</br>";
echo $produk2->getInfoProduk();