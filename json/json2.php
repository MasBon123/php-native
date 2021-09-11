<?php
$json ='{
    "nama": "jibril",
    "domisili": "jawa",
    "usia": 23,
    "wni": true,
    "hobi": [
    "Berenang", "Membaca", "Bertamasya"
  ]
}';

$data = json_decode($json);

echo "Nama: {$data->nama} <br>";
echo "Domisili: {$data->domisili} <br>";
echo "Usia: {$data->usia} <br>";
echo "Wni: {$data->wni} <br>";
echo "Hobi: " . implode(", ", $data->hobi);
?>