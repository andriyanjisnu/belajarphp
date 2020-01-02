<?php

class Produk {

	public $judul = "judul", 
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Royco";
$produk3->penerbit = "Sony";
$produk3->harga = "51000";

echo $produk3->getLabel();