<?php

class Produk {
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct($judul, $penulis, $penerbit, $harga) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}

$produk1 = new Produk("Naruto","Royco","Manga",90000);
$produk2 = new Produk("Boruto","Masako","Manga",91000);

echo $produk1->getLabel();