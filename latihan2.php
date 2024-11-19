<?php
//! Constructor merupakan method yang akan dijalankan otomatis saat kita melakukan instansiasi(membuat) object dari sebuah class.

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

//? ini yang di ubah dari codingan sebelumnya jadi lebih singkat
$produk3 = new Produk("Naruto","Masashi Kisimoto","Efraim urel palodang",30000);
$produk4 = new Produk("Uncharted","Neil Druckman","Sony Computer",250000);

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();