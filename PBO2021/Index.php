<?php
    include("Mahasiswa.php");
    require_once("Mahasiswa.php");
    require_once("MahasiswaBaru.php");

    $madha = new Mahasiswa();
    $madha->nim = "H1101191057";
    $madha->nama = "DEVI INDAH WULANDARI";
    $madha->tanggal_lahir = "27 MEI 2001";
    $madha->jenis_kelamin = "PEREMPUAN";
    $madha = new MahasiswaBaru("H1101201057", "DEVI INDAH WULANDARI", "2001-05-27", "PEREMPUAN");
    $harry = new Mahasiswa("H1101191068", "INDAH SRIDIANTI", "2001-03-04", "PEREMPUAN");
    $nisa = new Mahasiswa("H1101191073", "GUSTI IZZA MAULANA", "2000-08-15", "LAKI-LAKI");
?>

    $harry = new Mahasiswa();
    $harry->nim = "H1101191068";
    $harry->nama = "INDAH SRIDIANTI";
    $harry->tanggal_lahir = "04 Maret 2001";
    $harry->jenis_kelamin = "PEREMPUAN";

    $nisa = new Mahasiswa();
    $nisa->nim = "H1101191073";
    $nisa->nama = "GUSTI IZZA MAULANA";
    $nisa->tanggal_lahir = "15 AGUSTUS 2000";
    $nisa->jenis_kelamin = "LAKI-LAKI";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php echo "<p>Hello World</p>"; ?>
    <?php 
        $madha->tampilkanNama(); 
        echo "<br>";
        $madha->tampilkanUmur(); 
        echo "<br>";
        $madha->tampilkanAngkatan(); 
    ?>
</body>
</html> 