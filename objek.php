<?php
// Buat class
class Mobil {
    // Properti
    public $nama_pemilik = "kosong";
    public $warna_mobil = "kosong";
    public $merk_mobil = "kosong";

    // Method
    public function getMobil($nama_pemilik, $warna_mobil, $merk_mobil) {
        echo "Mobil ini milik " . $nama_pemilik;
        echo "</br>";
        echo "Warna mobil ini adalah " . $warna_mobil;
        echo "</br>";
        echo "Merk mobil nya " . $merk_mobil;
        return $this;
    }

    public function getDetail() {
        return $this->getMobil("pak jawir", "putih", "angkot");
    }

    public function getDetailCustom($nama_pemilik, $warna_mobil, $merk_mobil) {
        $this->nama_pemilik = $nama_pemilik;
        $this->warna_mobil = $warna_mobil;
        $this->merk_mobil = $merk_mobil;
        return $this->getMobil($nama_pemilik, $warna_mobil, $merk_mobil);
    }
}

// Object
$mobil1 = new Mobil();
$mobil1->getDetailCustom("Jawir", "Biru", "Angkot");
echo "</br>";
echo "</br>";

// Object 2
$mobil2 = new Mobil();
$mobil2->getDetailCustom("Adis", "Merah", "Lamborghini Veneno");
echo "</br>";
echo "</br>";

// Object 3
$mobil3 = new Mobil();
$mobil3->getDetailCustom("Bang Farhan", "Hitam", "Toyota Avanza");
echo "</br>";
echo "</br>";