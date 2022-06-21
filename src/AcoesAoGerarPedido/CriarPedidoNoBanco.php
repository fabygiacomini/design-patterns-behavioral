<?php

namespace DesignPatterns\Behavioral\AcoesAoGerarPedido;

use DesignPatterns\Behavioral\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados" . PHP_EOL;
    }
}