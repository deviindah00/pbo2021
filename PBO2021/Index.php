<?php
    include("Mahasiswa.php");
    require_once("Mahasiswa.php");
    require_once("MahasiswaBaru.php");

    $madha = new Mahasiswa();
    $madha->nim = "H1101191035";
    $madha->nama = "Ramadhan";
    $madha->tanggal_lahir = "08 Desember 2001";
    $madha->jenis_kelamin = "Laki-Laki";
    $madha = new MahasiswaBaru("H1101201035", "Ramadhan", "2001-12-08", "Laki-Laki");
    $harry = new Mahasiswa("H1101191040", "Harry Anshary", "2001-03-31", "Laki-Laki");
    $nisa = new Mahasiswa("H1101191039", "Fakihatunnisa Arobbi'u Watsalatsunna", "2001-06-23", "Perempuan");
?>

    $harry = new Mahasiswa();
    $harry->nim = "H1101191040";
    $harry->nama = "Harry Anshary";
    $harry->tanggal_lahir = "31 Maret 2001";
    $harry->jenis_kelamin = "Laki-Laki";

    $nisa = new Mahasiswa();
    $nisa->nim = "H1101191039";
    $nisa->nama = "Fakihatunnisa Arobbi'u Watsalatsunna";
    $nisa->tanggal_lahir = "23 Juni 2001";
    $nisa->jenis_kelamin = "Perempuan";
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