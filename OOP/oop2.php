<?php
class ucapan
{
    public function siang()
{
return "selamat siang";
}

public function sore()
{
    return "selamat sore";
}
public function _construct()
{
echo "selamat pagi <br>";
}
}

$selamat = new ucapan();
echo $selamat->siang() . "<br>";
echo $selamat->sore();