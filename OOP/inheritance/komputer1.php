<?php
class komputer
{
    public $merk;
    public $processor;
    public $memori;

    public function beliKomputer()
    {
        return "Beli Komputer Baru";
    }
}

class Laptop extends komputer
{
    public function lihatSpec()
    {
        return "merk: $this->merk, processor: $this->processor,
        memori: $this->memori";
    }
}

//buat objek laptop
$laptop = new Laptop();
//set property laptop dari komputer
$laptop->merk = "Asus";
$laptop->processor = "intel core 15";
$laptop->memori = "4GB";

echo $laptop->beliKomputer() . "<br>";
echo $laptop->lihatSpec();
