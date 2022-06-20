<?php

use DesignPatterns\Behavioral\Orcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 100;

// Test State Pattern
// Initial state: Em Aprovação
$orcamento->aplicaDescontoExtra();
echo $orcamento->valor; // 95
echo "\n";

$orcamento->valor = 100;
$orcamento->aprova();
$orcamento->aplicaDescontoExtra();
echo $orcamento->valor; // 98

$orcamento = new Orcamento();
$orcamento->valor = 100;
$orcamento->reprova();
//$orcamento->aplicaDescontoExtra(); // throws exception

/**
 * Observação:
 * Embora interessante, em casos de poucos estados, vale a pena fazer um pequeno if
 * E, importante notar que, para os casos em que não conseguimos mudar o estado e
 * jogamos exceções, podemos estar quebrando o contrato estabelecido de retornos
 * (conforme o Princípio de Substituição de Liskov)
 */