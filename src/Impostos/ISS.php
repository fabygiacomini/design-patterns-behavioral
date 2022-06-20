<?php

namespace DesignPatterns\Behavioral\Impostos;

use DesignPatterns\Behavioral\Orcamento;

class ISS implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}