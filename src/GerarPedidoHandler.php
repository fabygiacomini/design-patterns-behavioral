<?php


namespace DesignPatterns\Behavioral;


class GerarPedidoHandler
{
    public function __construct(/*PedidosRepository, MailService*/)
    {
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->valor = $gerarPedido->getValorOrcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        // PedidosRepository
        echo "Cria pedido no banco de dados" . PHP_EOL;
        // MailService
        echo "Envia e-mail para cliente" . PHP_EOL;
    }
}