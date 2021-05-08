<?php

namespace App;

class EsJeruk implements minuman
{
    public function buat()
    {
        echo "masukkan blender";
    }

    public function minum()
    {
        echo "minumlah";
    }

    public static function dilihat()
    {
        echo "cuma boleh dlihat saja, tidak boleh diminum.<br/><br/>";
    }
}