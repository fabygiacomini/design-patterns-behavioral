<?php

use DesignPatterns\Behavioral\CalculadoraDeImpostos;
use DesignPatterns\Behavioral\Impostos\ICMS;
use DesignPatterns\Behavioral\Impostos\ISS;
use DesignPatterns\Behavioral\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

// Test Strategy Pattern
echo $calculadora->calcula($orcamento, new ICMS());
echo "\n";
echo $calculadora->calcula($orcamento, new ISS());