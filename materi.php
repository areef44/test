<?php

// menghitung diskon
// jika harga lebih dari 100.000 
// diskonnya 20%

function hitungDiskon($uang)
{
    if ($uang > 100000) {

        $diskon = $uang * 20 / 100;

        $hargaAkhir = $uang - $diskon;

        return $hargaAkhir;
    } else {

        return $uang;
    }
}
