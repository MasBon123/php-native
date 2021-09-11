<?php

if (isset($_POST['input'])) {
    $nama = $_POST ['nama'];
    $nik = $_POST ['nik'];
    $jeniskelamin = $_POST ['jk'];
    $agama = $_POST ['agama'];
    $namamobil = $_POST ['namamobil'];
    $jenismobil = $_POST ['jenismobil'];
    $merkmobil = $_POST ['merkmobil'];
    $tanggalpinjam = $_POST ['tanggalpinjam'];
    $tanggalkembali = $_POST ['tanggalkembali'];
    $noplat = $_POST ['plat'];
    $penjamin = $_POST ['penjamin'];
    $supir = $_POST ['supir'];
    $bayar = $_POST ['bayar'];


    $denda = 0;
    $harian = 0;
    $hari = 0;
    $biaya = 0;

    if ($supir == "ya"){
        $harian = 275000;
    } else {
        $harian = 150000;
    }


    $biaya = $hari + $harian;

    $hari = (strtotime($tanggalkembali) - strtotime($tanggalpinjam)) / 60 / 60 / 24;

    echo "Nama : $nama <br>";
    echo "NIK  : $nik <br>";
    echo "Jenis kelamin : $jeniskelamin <br>";
    echo "Agama : $agama <br>";
    echo "Nama mobil : $namamobil <br>";
    echo "Jenis mobil : $jenismobil <br>";
    echo "Merk mobil : $merkmobil <br>";
    echo "Taggal peminjaman : $tanggalpinjam <br>";
    echo "Tanggal kembalian : $tanggalkembali <br>";
    echo "No plat mobil : $noplat <br>";
    echo "Penjaminan : $penjamin <br>";
    echo "Supir : $supir <br>";
    echo "Bayar : $bayar <br>";
}

?>