<?php

namespace DesignPatterns\Behavioral\EstadosOrcamento;

use DesignPatterns\Behavioral\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw  new \DomainException(
            'Orçamentos finalizados não podem receber descontos extras'
        );
    }
}