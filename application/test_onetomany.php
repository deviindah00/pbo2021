<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$dian = new Pengguna(3, "devi indah wulandari", new Alamat(5, "pontianak"));

$lapak_budi = new Penjual();
$lapak_budi->setName('budi saja');
$lapak_budi->setId(2);

$lapak_ani = new Penjual();
$lapak_ani->setName('ani jak');
$lapak_ani->setId(1);

$lapak_wati = new Penjual();
$lapak_wati->setName('wati juga');
$lapak_wati->setId(3);

$devi->setPenjual($lapak_budi);
$devi->setPenjual($lapak_ani);
$devi->setPenjual($lapak_wati);

$penjual_dian = $dian->getPenjual();
echo $penjual_dian[0]->getName(); // ada 3 index 0,1,2

