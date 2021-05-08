<?php
namespace App;

use App\Minuman;

class cendol implements minuman
{
    public function buat()
    {
        echo "tambahkan cendol, masukkan santan ";
        echo "dan air gula merah cair, ";
        echo "tambahkan es batu.<br/>";
    }

    public function minum()
    {
        echo "disedot dengan pipet/sedotan/selang.<br/>";
    }

    public function diberikanPadaTeman()
    {
        echo "ini untukmu, tenang saja, tidak ada sianida di dalamnya.<br/>";
    }
}

?>