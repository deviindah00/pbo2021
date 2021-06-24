<?php

namespace App\models;

use App\Models\mahasiswa;
use App\Model\Dosen;

class PerguruanTinggi
{
    public $id;
    public $namaPT;
    protected $akreditasi;
    public $mahasiswa = array();
    public $dosen;

    function __construct($id,$nmpt,$akr,$dosen)
    {
        $this->id = $id;
        $this->namaPT = $nmpt;
        $this->akreditasi = $akr;
        $this->dosen = $dosen;
    }

    public function registerMaba($nim,$nama)
    {
    }

    public function getDosen()
    {
    }
}