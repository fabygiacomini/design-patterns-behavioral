<?php

use DesignPatterns\Behavioral\GerarPedido;
use DesignPatterns\Behavioral\GerarPedidoHandler;
use \DesignPatterns\Behavioral\AcoesAoGerarPedido\{CriarPedidoNoBanco, EnviarPedidoPorEmail, LogGerarPedido};

require_once 'vendor/autoload.php';

// Test Command Pattern
$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);

// test Command Handler Patter
$gerarPedidoHandler = new GerarPedidoHandler();

// test Observer Pattern
$gerarPedidoHandler->adicionarAcaoAposGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAposGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionarAcaoAposGerarPedido(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);

// test - run on command line: `php testCommandAndObserver.php 1200.5 7 "Fabiana"`

/**
 * A vantagem do uso do padrão Command Handler ao invés de apenas Command
 * é que conseguimos reutilizar o Command sem poluir a classe com as dependências
 * necessárias para um caso em específico (ex.: mailService, repository, etc), e,
 * assim, podemos reutilizar o command em vários lugares
 */

/**
 * Adicionando as Ações após gerar pedido (classes que implementam essa interface)
 * conseguimos padronizar classes que estarão "escutando" o fim da execução de algo
 * (neste caso de um command) para depois executar algumas ações (Observer Pattern).
 * Assim, o handler do command não vai crescer infinitamente quanto mais ações forem
 * sendo adicionadas, pois ele não precisa saber quais as ações serão executadas (apenas
 * faz um foreach sobre elas e as chama); e cada local de uso pode setar as ações que
 * forem cabíveis aos diversos possíveis cenários).
 * No mundo real, não é comum adicionar os Observers dentro do Handler no PHP, mas sim
 * num Repository, por exemplo.
 * Podemos criar tanto com classes personalizadas, quanto usando classes padrão do PHP
 * (SplSubject como interface do Command Handler ou de quem vai disparar os observers e
 * SplObserver como interface das classes Observers).
 */