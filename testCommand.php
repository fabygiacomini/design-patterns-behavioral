<?php

use DesignPatterns\Behavioral\GerarPedido;
use DesignPatterns\Behavioral\GerarPedidoHandler;

require_once 'vendor/autoload.php';

// Test Command Pattern
$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);

$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);

// test - run on command line: `php testCommand.php 1200.5 7 "Fabiana"`

/**
 * A vantagem do uso do padrão Command Handler ao invés de apenas Command
 * é que conseguimos reutilizar o Command sem poluir a classe com as dependências
 * necessárias para um caso em específico (ex.: mailService, repository, etc), e,
 * assim, podemos reutilizar o command em vários lugares
 */