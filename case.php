<?php

//buat kelas 'bangun datar'
//semua atribut nya private
//atribut (panjang,lebar, sisi)
//method menghitung:
// - luas segitiga
// - luas persegi
// - luas lingkaran
//di method menghitung luas,
//tidak boleh ada parameter
// untuk mengubah atribut harus ada method lain


class bangunDatar
{

    public $panjang;
    private $lebar;
    private $sisi;

    function __construct($panjang, $lebar, $sisi)
    {
        $this->panjang = $panjang; // memanggil variabel private panjang
        $this->lebar = $lebar; // memanggil variabel private lebar
        $this->sisi = $sisi; // memanggil variabel private sisi
    }

    function parameter()
    {
        $panjang = $this->panjang;
        $lebar = $this->lebar;
        $sisi = $this->sisi;

        return $sisi;
    }

    function luasSegitiga()
    {
        $alas = $this->panjang;
        $tinggi = $this->lebar;
        $luas = 0.5 * ($alas * $tinggi);
        return $luas;
    }

    function luasPersegi()
    {
        $sisi = $this->sisi;
        $luas = $sisi * $sisi;
        return $luas;
    }

    function luasLingkaran()
    {
        $jari = $this->sisi;
        $luas = pi() * ($jari * $jari);
        return $luas;
    }
}

$hasil = new bangunDatar(4, 4, 5);
echo $hasil->luasSegitiga();
echo "<br>";
echo $hasil->luasPersegi();
echo "<br>";
echo $hasil->luasLingkaran();
echo "<br>";
echo $hasil->parameter();
