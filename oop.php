<?php
// Buat class
class Rumah {
    // Properti
    public $nama_pemilik = "kosong";
    public $warna_rumah = "kosong";
    public $merk_tv = "kosong";

    // Method
    private function getRumah($nama_pemilik, $warna_rumah, $merk_tv) {
        echo "Rumah ini milik :" . $nama_pemilik;
        echo "</br>";
        echo "Warna rumah ini adalah " . $warna_rumah;
        echo "</br>";
        echo "Merk TV nya " . $merk_tv;
    }

    public function getDetail() {
        $this->getRumah("Adis", "putih", "samsung");
    }

    public function getDetailCustom($nama_pemilik, $warna_rumah, $merk_tv) {
        $this->nama_pemilik = $nama_pemilik;
        $this->warna_rumah = $warna_rumah;
        $this->merk_tv = $merk_tv;
        $this->getRumah($nama_pemilik, $warna_rumah, $merk_tv);
    }
}

// Object
$rumah1 = new Rumah();
$rumah1->getDetailCustom("Adis", "Putih", "LG");
echo "</br>";
echo "</br>";

// Object 2
$rumah2 = new Rumah();
$rumah2->getDetailCustom("Fakhri", "Silver", "Toshiba");
echo "</br>";
echo "</br>";

// Object 3
$rumah3 = new Rumah();
$rumah3->getDetailCustom("Juna", "Hitam", "Sharp");
echo "</br>";
echo "</br>";