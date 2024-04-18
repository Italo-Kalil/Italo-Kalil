<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Tipocontas\Conta_corrente;
use App\Contratos\DadosContaBancariaInterface;
use App\Contratos\OperacoesContaBancaria;

function exibirDados(DadosContaBancariaInterface $conta)
{
    echo "Banco: " . $conta->getBanco();
    echo PHP_EOL;
    echo "Nome do Titular: " . $conta->getNomeTitular();
    echo PHP_EOL;
    echo "Ag/Conta: " . $conta->getNumeroAgencia() . " / " . $conta->getNumeroConta();
    echo PHP_EOL;
}

function executarOperações(OperacoesContaBancaria $conta)
{
    echo $conta->obtersaldo();
    echo PHP_EOL;
    echo $conta->depositar(60);
    echo PHP_EOL;
    echo $conta->sacar(20);
    echo PHP_EOL;
    echo $conta->obtersaldo();
    echo PHP_EOL;
}


$conta = new Conta_corrente(
    "Banco do Brasil", // Banco
    "Italo Kalil", // nometitular
    "8244", // agencia
    "15675-08", // conta
    327.06 // saldo
);

exibirDados($conta);
