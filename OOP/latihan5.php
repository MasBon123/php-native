<?php
class kimiaFarma
{
    protected $elsigan = "society";
    private $sandi = "1234";
    public $nama = "Mas Bon";

    public function login()
    {
        $a = $this->elsigan;
        $b = $this->sandi;
        if ($a == "society" && $b == "1234") {
            $c = "Login Berhasil";
        }
        return $c;
    }

    public function info()
    {
        $a = $this->elsigan;
        $b = $this->sandi;
        $d = $this->nama;
        $c = "elsigan : " . $a . "<br>" . " Pemilik : " . $d;
        return $c;
    }
}
$society = new kimiaFarma();

echo $society->info() . "<br>";
echo "login : " . $society->login();
