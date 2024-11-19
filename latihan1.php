<?php
//! Property adalah variable didalam sebuah object(class)
//! method adalah function didalam sebuah object(class)

class Produk {
  public  $judul = 'judul',
          $penulis = 'penulis',
          $penerbit = 'penerbit',
          $harga = 0;

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penerbit = "Masashi Kisimoto";
$produk3->penulis = "Efraim urel palodang";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;


echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
// echo "<hr>";