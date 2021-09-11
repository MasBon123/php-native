<?php

//mengdefinisikan  sebuah kelas
class kucing
{
    //membuat property atau atributes
    public $warna = "coklat";
    public $jumlahkaki = 4;
    public $jenisBulu = "panjang";
    public $makanandfavorite = "Ikan pindang";

    //membuat method (behavior/ )
    public function bersuara()
    {
        return "meowng...... meowng...... meowng.....";
    }
    public function berburu()
    {
        return "berburu ikan";
    }
}

//mebuat object (inisiasi object)
$kucing1 = new kucing();
echo "warna kucing: " . $kucing->warna . "<br>";
echo "sifat kucing: " . $kucing->bersuara() . "<hr>";

$kucing2 = new kucing();
//set warna kucing
$kucing2->warna = "oren";
echo "warna kucing : " . $kucing2->warna . "<br>";
echo "sifat kucing : " . $kucing2->berburu() . "<hr>";