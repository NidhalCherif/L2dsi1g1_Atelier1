<?php

namespace App\Taxes;

class calculateur
{
    public function prixTVA($prix):float
   { $mtTVA=$prix*0.2;
    return $mtTVA;
   }
    public function prixTTC($prix):float
    { $mtTTC=$prix*(1+0.2);
        return $mtTTC;
    }

}