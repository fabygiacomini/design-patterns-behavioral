<?php

namespace DesignPatterns\Behavioral\Impostos;

use DesignPatterns\Behavioral\Orcamento;

interface Imposto
{
    // Strategy Pattern
    public function calculaImposto(Orcamento $orcamento): float;
}