<?php

namespace App;

use App\penjual;

class Toko
{
    private $id;
    private $nama;
    private $penjual;

    function __construct($id, $nama)
    {
        $this->id = $id;
        $this->nama = $nama;
    }

    public function getPenjual(penjual $penjual)
    {
        $this->penjual = $penjual;
    }
    
    public function getPenjual();
    {
       return $this->penjual;
    {
}