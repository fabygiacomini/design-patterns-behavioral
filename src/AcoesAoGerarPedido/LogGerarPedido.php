<?php


namespace DesignPatterns\Behavioral\AcoesAoGerarPedido;


use DesignPatterns\Behavioral\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log de criação de pedido" . PHP_EOL;
    }
}