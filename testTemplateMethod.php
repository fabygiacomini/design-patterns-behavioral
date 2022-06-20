<?php

use DesignPatterns\Behavioral\Orcamento;
use DesignPatterns\Behavioral\Impostos\IKCP;
use DesignPatterns\Behavioral\Impostos\ICPP;

require 'vendor/autoload.php';

// Test Template Method Pattern
$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 4;

// Max alíquota
echo (new IKCP())->calculaImposto($orcamento) . "\n";
echo (new ICPP())->calculaImposto($orcamento) . "\n";

$orcamento->valor = 250;

// Min alíquota
echo (new IKCP())->calculaImposto($orcamento) . "\n";
echo (new ICPP())->calculaImposto($orcamento);
