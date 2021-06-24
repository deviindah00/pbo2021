<?php

namespace App\models;

class tenagakependidikan extends pengguna implements pegawai

{
    private $nip;
    private $nama;
    private $alamat;

    function __construct($username,$password,$email,$nip,$nama,$alamat)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->nama = $nama;
        $tis->nip = $nip;
        $this->alamat =$alamat;
    }

    public function hitungTunjanganKinerja()
    {

    }
    public function setNip($nip)
    {
        $nip->nip = $nip;
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
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}