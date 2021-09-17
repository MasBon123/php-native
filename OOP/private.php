<?php
class komputer
{
    protected $jenisProcessor = "Intel Core 17";

    protected function tampilkanJenisProcessor()
    {
        return $this->jenisProcessor;
    }
}

class Laptop extends Komputer
{
    public function getProcessor()
    {
        return $this->jenisProcessor;
    }
}

$laptop = new Laptop();
echo $laptop->getProcessor();
