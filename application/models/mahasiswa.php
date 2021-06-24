<?php

namespace App\models;

require_once('pengguna.php');

class mahasiswa extends pengguna
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    function __construct($username, $password, $email, $nim, $nama, $ipk, $alamat)
    {
        $this->username = $username;
        $this->password = $password;
        $this->nim = $nim;
        $this->nama = $nama;
        $tis->IPK = $ipk;
        $this->alamat =$alamat;
    }

    public function inputMakul()
    {
    }

    public function updateProfil()
    {
    }
}