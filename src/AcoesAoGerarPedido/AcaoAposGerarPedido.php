<?php


namespace DesignPatterns\Behavioral\AcoesAoGerarPedido;


use DesignPatterns\Behavioral\Pedido;

// ObserverPattern
interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido);
}