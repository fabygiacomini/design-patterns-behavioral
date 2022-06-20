<?php

namespace DesignPatterns\Behavioral\EstadosOrcamento;

use DesignPatterns\Behavioral\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }
}