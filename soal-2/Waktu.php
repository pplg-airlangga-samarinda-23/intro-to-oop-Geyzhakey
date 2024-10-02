<?php
class Waktu
{
    // deklarasikan atribut sesuai ditentukan buku
    public $jam;
    public $menit;
    public $detik;
    // deklarasikan metode sesuai yang diminta buku
    public function __construct($jam,$menit,$detik) {
        $this->jam = $jam;
        $this->menit = $menit;
        $this->detik = $detik;
    }

    public function getjam() {
        return $this->jam;
    }
    public function getmenit() {
        return $this->menit;
    }
    public function getdetik() {
        return $this->detik;
    }
    public function setjam() {
        $this->jam = $Jam;
    }
    public function setmenit() {
        $this->menit = $menit;
    }
    public function setdetik() {
        $this->detik = $detik;
    }
    public function assignwaktu($jam,$menit,$detik) {
        $this->setjam($jam);
        $this->setmenit($menit);
        $this->setdetik($detik);
    }
    public function __get($atribut) {
        return $this->$atribut;
    }
    public function __set($atribut, $Nilai) {
        $this->$atribut = $Nilai;
    }
}

$contoh = new Waktu(15,34,50);
echo "Sekarang pukul".$contoh->jam.":".$contoh->menit.":".$contoh->detik."<br>"; //output: Sekarang pukul 15:34:50