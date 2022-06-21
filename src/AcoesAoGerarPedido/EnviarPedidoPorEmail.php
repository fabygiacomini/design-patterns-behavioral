<?php


namespace DesignPatterns\Behavioral\AcoesAoGerarPedido;


use DesignPatterns\Behavioral\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando e-mail de pedido gerado." . PHP_EOL;
    }
}