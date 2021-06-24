<?php

namespace App\models;

use App\models;
use App\models\Dosen;
use App\models\mahasiswa;

class TugasAkhirController
{
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;

    function __construct($id, $judul, $mahasiswa, $pembimbing, $penguji)
    {
        $this->id = $id;
        $this->judulTA = $judul;
        $this->pembimbingTA = $pembimbing;
        $this->pengujiTA = $penguji;
    }

    public function setMAhasiswaTA(Mahasiswa $mahasiswa)
    {
        $this->mahasiswaTA = $mahasiswa;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getjudulTA()
    {
        return $this->judulTA()
    }

    public function getmahasiswaTA()
    {
        return $this->mahasiswaTA()
    }

    public function getpembimbingTA()
    {
        return $this->pembimbingTA()
    }

    public function getpengujiTA()
    {
        return $this->pengujiTA()
    }

    public function tambahTA()
    {
    }

}