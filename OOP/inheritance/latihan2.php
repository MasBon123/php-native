<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <table>
            <form action="" method="post">
                <tr>
                    <td>nama</td>
                    <td> : </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>nim</td>
                    <td> : </td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>nilai</td>
                    <td> : </td>
                    <td><input type="number" name="nilai"></td>
                </tr>
                <tr>
                    <td>nama dosen</td>
                    <td> : </td>
                    <td><input type="text" name="dosen"></td>
                </tr>
                <tr>
                    <td>Mata Kuliah</td>
                    <td> : </td>
                    <td><input type="text" name="mataKuliah"></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="submit" value="Simpan"></td>
                </tr>
            </form>
            </table>
            <?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];
    $dosen = $_POST['dosen'];
    $mataKuliah = $_POST['mataKuliah'];

    class mahasiswa
    {
        public $nama;
        public $nim;
        public $nilai;
        public $dosen;
        public $mataKuliah;

        public function __construct($a, $b, $c, $d, $e)
        {
            $this->nama = $a;
            $this->nim = $b;
            $this->nilai = $c;
            $this->dosen = $d;
            $this->mataKuliah = $e;

        }
    }
    class mataKuliah extends mahasiswa
    {
        public function data()
        {
            if ($this->nilai >= 85) {
                $grade = "A (Lulus)";
            } else if ($this->nilai >= 75) {
                $grade = "B (Lulus)";
            } else if ($this->nilai >= 65) {
                $grade = "C (Perbaikan)";
            } else {
                $grade = "D (Tidak Lulus)";
            }
            return $grade;

        }
    }

}
$mataKuliah = new mataKuliah($nama, $nim, $nilai, $dosen, $mataKuliah);
echo "Nama : " . $mataKuliah->nama . "<br>";
echo "Nim : " . $mataKuliah->nim . "<br>";
echo "Nilai : " . $mataKuliah->nilai . "<br>";
echo "Nama Dosen : " . $mataKuliah->dosen . "<br>";
echo "Mata Kuliah : " . $mataKuliah->mataKuliah . "<br>";
echo "Status : " . $mataKuliah->data();

?>

    </fieldset>
</body>
</html>