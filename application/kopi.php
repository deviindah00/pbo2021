<?php
namespace App;

class kopi implements minuman
{
    public function buat()
    {
        echo "masak air panas hingga 100 derajat celcius, ";
        echo "masukkan kopi ke dalam gelas dan tuangkan air panas, ";
        echo "aduk sebanyak 60 kali putaran. ";
        echo "diamkan selama 15 menit, ";
        echo "tambahkan gula aren.<br/>";
    }

    public function minum()
    {
        echo "minum dengan cara diseruput sedikit demin sedikit.<br/>";
    }

    public function tambahSusu()
    {
        echo "tambahkan susu kedalam kopi.<br/>";
    }
}