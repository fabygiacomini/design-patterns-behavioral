<?php

use DesignPatterns\Behavioral\CalculadoraDeDescontos;
use DesignPatterns\Behavioral\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

// Test Chain of Responsibility Pattern
echo $calculadora->calculaDescontos($orcamento);