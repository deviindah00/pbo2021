<?php
    include("Mahasiswa.php");
    require_once("Mahasiswa.php");
    require_once("MahasiswaBaru.php");

    $de = new Mahasiswa();
    $devi->nim = "H1101191057";
    $devi->nama = "DEVI INDAH WULANDARI";
    $devi->tanggal_lahir = "27 MEI 2001";
    $devi->jenis_kelamin = "PEREMPUAN";
    $devi = new MahasiswaBaru("H1101201057", "DEVI INDAH WULANDARI", "2001-05-27", "PEREMPUAN");
    $indah = new Mahasiswa("H1101191068", "INDAH SRIDIANTI", "2001-03-04", "PEREMPUAN");
    $gusti = new Mahasiswa("H1101191073", "GUSTI IZZA MAULANA", "2000-08-15", "LAKI-LAKI");
?>

    $indah = new Mahasiswa();
    $indah->nim = "H1101191068";
    $indah->nama = "INDAH SRIDIANTI";
    $indah->tanggal_lahir = "04 Maret 2001";
    $indah->jenis_kelamin = "PEREMPUAN";

    $gusti= new Mahasiswa();
    $gusti->nim = "H1101191073";
    $gusti->nama = "GUSTI IZZA MAULANA";
    $gusti->tanggal_lahir = "15 AGUSTUS 2000";
    $gusti->jenis_kelamin = "LAKI-LAKI";
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