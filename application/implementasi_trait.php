<?php

require_once('vendor/autoload.php');

use App\person;

$devi = new person();

$devi->goodBye('aling');
$devi->hasName = 'devi indah wulandari';
echo $devi->hasName;