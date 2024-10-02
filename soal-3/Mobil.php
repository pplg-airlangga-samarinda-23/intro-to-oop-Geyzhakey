<?php
class Mobil {
    // lengkapi dengan atribut dan metode sesuai pada buku
    public $plat;
    public $merek;
    public $type;
    public $tahun;
    public $pembuatan;
    public $norangka;
    public $nomesin;
    public $bahanbakar;

    // contoh metode melaju()
    public function melaju() {
        echo "Mobil sedang melaju.";
    }
    public function belok() {
        echo "Mobil sedang belok.";
    }
    public function mundur() {
        echo "Mobil sedang mundur.";
    }
    public function berhenti() {
        echo "Mobil sedang berhenti.";
    }
}

// buat sebuah objek mobil dan lengkapi atributnya
$lamborghini = new Mobil();
$lamborghini->plat = "KT 666 FS";
$lamborghini->merek = "lamborghini";
$lamborghini->type = "honda";
$lamborghini->tahun = 1000;
$lamborghini->pembuatan = "indonesia";
$lamborghini->norangka = "GER8434HJHB4";
$lamborghini->nomesin = "GR343";
$lamborghini->bahanbakar = "bensin";


// panggil keempat metode yang terdapat pada kelas Mobil
$lamborghini->melaju();
echo "<br>";
$lamborghini->mundur();
echo "<br>";
$lamborghini->belok();
echo "<br>";
$lamborghini->berhenti();
?>