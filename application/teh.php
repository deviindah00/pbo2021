<?php

namespace App;

class teh implements minuman
{
    public function buat()
    {
        echo "tuangkan air hangat/panas kedalam gelas, ";
        echo "kemudian masukkan teh celup ke dalam gelas, ";
        echo "tunggu hingga air berubah warna. ";
        echo "setelah dirasa pas, tambahkan gula secukupnya, ";
        echo "aduk hingga gula larut dalam teh.<br/>";
    }

    public function minum() 
    {
        echo "diseruput sedikit demi sedikit.<br/>";
    }

    public function tambahEs()
    {
        echo "tambahkan es batu untuk dinikmati secara dingin.<br/>";
    }

}