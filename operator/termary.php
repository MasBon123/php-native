<?php
$tahun = date('Y');
$kabisat = $tahun %4 == 0;
$jawab = $kabisat ? " Iya ": "bukan tahun kabisat";
echo$tahun."<br>";
echo"Tahun kabisat : ".$jawab;
echo"<br>";
