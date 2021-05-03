<?php

class Menu
{
  public $name;
  public $gambar;
  public $harga;
  public $kalori;
  public $vab;
  public $jmlPesanan = 0;


  public function __construct($name, $gambar, $harga, $kalori, $vab)
  {
    $this->name = $name;
    $this->gambar = $gambar;
    $this->harga = $harga;
    $this->kalori = $kalori;
    $this->vab = $vab;
  }

  public function setJmlPessanan($jmlPesanan)
  {
    return $this->jmlPesanan = $jmlPesanan;
  }
  public function getTotalBayar()
  {
    return $this->harga * $this->jmlPesanan;
  }
}

$pecelAyam = new Menu('Ayam', 'assets/image/PecelAyam.jpg', 12000, 7000, 'pecelAyam');
$pecelTelur = new Menu('Telur', 'assets/image/PecelTelur.jpg', 10000, 3000, 'pecelTelur');
$pecelMadiun = new  Menu('Tempe', 'assets/image/pecelMadiun.jpg', 8000, 3000, 'pecelTelur');


$menus = array($pecelAyam, $pecelTelur, $pecelMadiun);
