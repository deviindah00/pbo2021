<?php
namespace App;


use App\pengguna;

class InfoPengguna
{
    private $id;
    private $no_hp;
    private $no_wa;
    private $instagram;
    private $pengguna;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setPengguna(pengguna $pengguna)
    {
        $this->pengguna = $pengguna;
    }

    public function setInstagram($username)
    {
        $this->instagram = $instagram;
    }
}