<?php

namespace DesignPatterns\Behavioral;

use DesignPatterns\Behavioral\Impostos\Imposto;

class CalculadoraDeImpostos
{
    // Strategy Pattern
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}