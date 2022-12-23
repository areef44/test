<?php

//attribute

//method


class Human
{


    public $name; // --> ini yang kepanggil

    public $age;

    function __construct($name, $age)
    {
        $this->name = $name; // memanggil name yang atas
        $this->age = $age; //memanggil age yang diatas
    }


    function getName()
    {
        return $this->name; //--> gunakan this agar tidak bingung
    }

    function setName($name)
    { //--> data dalam kelas
        $this->name = $name;
    }
}

$fulan = new Human("Fulan", 22);
echo $fulan->getName();
echo "<br>";
$fulan->fulan->getName();
echo "<br>";
