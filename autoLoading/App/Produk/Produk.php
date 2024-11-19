<?php

abstract class Produk {
  protected $judul,
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

  abstract public function getInfo();

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