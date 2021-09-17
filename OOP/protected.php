<?php
class Laptop
{
    public $pemilik;

    public function hidupkanLaptop()
    {
        return "Hiduokan Laptop";
    }
    public function paksaHidupkanLaptop()
    {
        return $this
    }
}

$laptopAnto = new Laptop();
$laptopAnto->pemilik = "Anto";

echo $laptopAnto->pemilik;
echo $laptopAnto->hidupkanLaptop();
echo $laptopAnto->paksaHidupkanLaptop();