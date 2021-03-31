<?php

use application\Dosen;
use application\Mahasiswa;


require_once 'initialize.php';


$dian = new Dosen('12345','Dian Prawira','08123456','Rp. 4.500.000','54321','Dosen');
$dian->mengajar();
$dian->meneliti();

$Devi = new Mahasiswa('H1101191057', 'Devi Indah Wulandari', '27-05-2001', 'P');
$Devi->tampilkanAngkatan(); "<br>";
$Devi->tampilkanUmur();


