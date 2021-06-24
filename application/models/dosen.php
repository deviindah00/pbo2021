<?php

namespace App\models;

require_once('pengguna.php');


class dosen extends pengguna implements pegawai
{
    private $nip;
    private $nama;
    private $no_telp;

    public function validasiMahasiswa()
    {
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }


    public function presensiMasuk()
    {
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNama($nama)
    {
        $this->nama =$nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}