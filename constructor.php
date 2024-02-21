<?php

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function __construct( $judul, $penulis, $penerbit, $harga ) {
        echo "Hello World!";
    }

    public function getLabel() {
        return "$this->judul, $this->penulis, $this->penerbit";
    }
}

$produk3 = new Produk();
$produk3 -> judul = "One Piece";
$produk3 -> penulis = "Eiichiro Oda";
$produk3 -> penerbit = "Shonen Jump";
$produk3 -> harga = 25000;

$produk4 = new Produk();
$produk4 -> judul = "Uncharted";
$produk4 -> penulis = "Neil Druckmann";
$produk4 -> penerbit = "Sony Computer";
$produk4 -> harga = 250000;


echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

