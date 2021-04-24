<?php

class pegawai
{
    public $nama;

    public function sapa()
    {
        echo "hallo " . $this->nama . "selamat, sekarang anda diterima sebagai seorang pegawai\n";
    }

    public function masuk()
    {
        echo "anda masuk kerja pada tanggal " . date('Y-m-d') . "\n";
    }
}

class StaffTu extends pegawai
{
    public function sapa()
    {
        echo "hai " . $this->nama . "anda akan berada di staff Tata Usaha\n";
    }

    public function parentSapa()
    {
        return parent::sapa();
    }
}

$devi = new StaffTu();
$devi->nama = 'devi indah wulandari';
$devi->parentSapa;
$budi->masuk();


