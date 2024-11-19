<?php
//! Keywoard static

class ContohStatic {
  public static $angka = 1;

  public static function hallo() {
    return "Hallo " . self::$angka . " Kali.";
  }
}

echo ContohStatic::$angka;
echo "</br>";
echo "<hr>";
echo ContohStatic::hallo();