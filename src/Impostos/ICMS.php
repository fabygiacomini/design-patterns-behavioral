<?php

namespace DesignPatterns\Behavioral\Impostos;

use DesignPatterns\Behavioral\Orcamento;

class ICMS implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}