<?php

if (isset($_POST['jumlah'])) {
    $nama =$_POST ['nama'];
    $jk = $_POST ['jk'];
    $agama = $_POST ['agama'];
    $gol = $_POST ['golongan'];
    $jam = $_POST ['jam'];
    echo "Nama Anda     : $nama <br>";
    echo "Jenis kelamin : $jk <br>";
    echo "Agama         : $agama <br>";
    echo "Golongan      : $gol <br>";
    echo "Jam kerja     : $jam";
}

?>====