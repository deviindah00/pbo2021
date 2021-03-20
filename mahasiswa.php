<?php
class Mahasiswa {
 public $nim; 'H1101191057';
 public $nama; 'Devi indah wulandari';
 public $tanggal_lahir; '27 mei 2001';
 public $jenis_kelamin; 'wanita';
 
 function __construct($nim,$nama,$tgl,$jk){
   $this->nim = $nim; 'H1101191057';
   $this->nama = $nama; 'Devi indah wulandari'
   $this->tanggal_lahir = $tgl;
   $this->jenis_kelamin = $jk;
 }
 
 public function tampilkanAngkatan(){
  
 }
 
 public function tampilkanUmur(){
   echo date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
 }
 
 public function tampilkanNama($nama){
   echo $this->nama;
 }
 
}
?>