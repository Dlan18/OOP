<?php

// Parent class (kelas induk)
class Brankas {
    // Property dengan tiga access modifier: public, private, protected
    public $merk;
    private $kodeKeamanan;
    protected $kapasitas;

    // Constructor
    public function __construct($merk, $kodeKeamanan, $kapasitas) {
        $this->merk = $merk;
        $this->kodeKeamanan = $kodeKeamanan;
        $this->kapasitas = $kapasitas;
    }

    // Destructor
    public function __destruct() {
        echo "Brankas dengan merk {$this->merk} telah dihapus.<br>";
    }

    // Setter dan getter
    public function setKodeKeamanan($kodeKeamanan) {
        $this->kodeKeamanan = $kodeKeamanan;
    }

    public function getKodeKeamanan() {
        return $this->kodeKeamanan;
    }

    public function setKapasitas($kapasitas) {
        $this->kapasitas = $kapasitas;
    }

    public function getKapasitas() {
        return $this->kapasitas;
    }

    // Method
    public function buka() {
        return "Brankas dengan merk {$this->merk} berhasil dibuka.";
    }
}

// Child class (kelas anak)
class BrankasMini extends Brankas {
    // Method khusus untuk brankas Mini
    public function aturKodeKeamanan($kodeBaru) {
        $this->setKodeKeamanan($kodeBaru);
        return "Kode keamanan brankas Mini berhasil diatur.";
    }

    public function buka() {
        return "Brankas Mini dengan merk {$this->merk} berhasil dibuka.";
    }
}

// Instansiasi object dari masing-masing class
$brankas1 = new Brankas("Kozure", "54321", "350 Kg");
$brankasMini1 = new BrankasMini("Taffware", "0987", "50 Kg");

// Set semua property dari objectnya menggunakan setter
$brankas1->setKapasitas("370 Kg");
$brankasMini1->aturKodeKeamanan("4321");

// Get semua property dari objectnya menggunakan getter
echo "Merk brankas: {$brankas1->merk}<br>";
echo "Kode keamanan brankas: {$brankas1->getKodeKeamanan()}<br>";
echo "Kapasitas brankas: {$brankas1->getKapasitas()}<br>";

echo "Merk brankas Mini: {$brankasMini1->merk}<br>";
echo "Kode keamanan brankas Mini: {$brankasMini1->getKodeKeamanan()}<br>";
echo "Kapasitas brankas Mini: {$brankasMini1->getKapasitas()}<br>";

// Panggil semua method dari objectnya
echo $brankas1->buka() . "<br>";
echo $brankasMini1->buka() . "<br>";
echo $brankasMini1->aturKodeKeamanan("") . "<br>"; 

?>

<style>
    * {
        font-family: sans-serif;
    }
</style>