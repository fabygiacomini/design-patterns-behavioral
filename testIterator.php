<?php

require_once 'vendor/autoload.php';

use DesignPatterns\Behavioral\Orcamento;
use DesignPatterns\Behavioral\ListaDeOrcamentos;

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 3;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 3;
$orcamento2->reprova();
$orcamento2->valor = 150;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 5;
$orcamento3->aprova();
$orcamento3->valor = 1350;

// Test Iterator Pattern
$listaOrcamentos = new ListaDeOrcamentos();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);

foreach ($listaOrcamentos->getIterator() as $orcamento) {
    echo "Valor: " . $orcamento->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "Qtd. Itens: " . $orcamento->quantidadeItens . PHP_EOL;
    echo PHP_EOL;
}

/**
 * O Iterator encapsula um array ao mesmo tempo que "tipa"/define o tipo de dado
 * que pode ser adicionado nesse array, já que o PHP não tipa arrays por padrão.
 * Assim, também estamos abracando o Object Calisthenics que fala que devemos
 * encapsular os iteráveis em classes específicas para isso.
 * Dessa forma, garantimos que dentro da lista só tem objetos do tipo Orcamento
 * e quem vai usar essa lista não precisa saber como a classe foi implementada.
 */