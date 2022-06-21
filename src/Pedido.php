<?php


namespace DesignPatterns\Behavioral;


class Pedido
{
    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;

}