<?php
class Laptop
{
    public $pemilik;

    public function hidupkanLaptop()
    {
        return "Hiduokan Laptop";
    }
}

$laptopAnto = new Laptop();
$laptopAnto->pemilik = "Anto";

echo $laptopAnto->pemilik;
echo $laptopAnto->hidupkanLaptop();
