<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Conta_bancaria;

$conta1 = new Conta_bancaria();


$conta1->setBanco('Banco do Brasil');
$conta1->setNomeTitular('Italo Kalil');
$conta1->setNumeroAgencia('1945');
$conta1->setNumeroConta('32578-56');
$conta1->setSaldo(100.0);
$conta1->exibirDadosDaConta();
var_dump($conta1);
