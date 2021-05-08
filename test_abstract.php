<?php
require_once ('vendor/autolod.php');

use App\Cendol;
use App\kopi;
use App\EsJeruk;
use App\teh;

$teh_devi = new cendol();
$teh_devi->minum();

$kopi_aming = new kopi();
$kopi_aming->buat();
$kopi_aming->minum();

$kopi_asiang = new kopi();
$kopi_asiang->buat();
$kopi_asiang->tambahSusu();
$kopi_asiang->minum();

Esjeruk::dilihat();

$teh_mantap = new teh();
$teh_mantap->buat();
$teh_mantap->tambahEs();
$teh_mantap->minum();
