<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 4 </title>
</head>
<body>
    <form action="masuk2.php" method="POST">
        <td>Menghitung Gaji</td> <br>
        <td>Nama : </td>
        <input type="text" name="nama"> <br>
        <td>Jenis Kelamin</td> <br>
        <input type="radio" name="jk" value="laki-laki"> Laki-laki
        <input type="radio" name="jk" value="perempuan"> Perempuan <br>
        <td>Agama :</td> <br>
        <select name="agama">
            <option name ="agama" value="Islam"> Islam</option>
            <option name ="agama" value="Kristen"> Kristen</option>
            <option name ="agama" value="Hindu"> Hindu</option>
            <option name ="agama" value="Budha"> Budha</option>
            <option name ="agama" value="Atheis"> Atheis</option>
        </select> <br>
        <td> Golongan : </td>
        <select name="golongan"> <br>
            <option name ="golongan" value="1"> 1 </option>
            <option name ="golongan" value="2"> 2 </option>
            <option name ="golongan" value="3"> 3 </option>
            <option name ="golongan" value="4"> 4 </option>
        </select> <br>
            <td> Jumlah Jam </td> <br>
            <input type="number" name="jam"> <br>
            <input type="submit" name ="jumlah" value="jumlahkan">
</html>