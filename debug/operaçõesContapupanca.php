<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Tipocontas\Conta_poupanca;

$conta = new Conta_poupanca(
        "Banco do Brasil", // Banco
        "Italo Kalil", // nometitular
        "8244", // agencia
        "15675-08", // conta
        327.06 // saldo
    );

echo $conta->getBanco();
echo PHP_EOL;
echo $conta->getNomeTitular();
echo PHP_EOL;
echo $conta->getNumeroAgencia();
echo PHP_EOL;
echo $conta->getNumeroConta();
echo PHP_EOL;
echo $conta->obtersaldo();
echo PHP_EOL;
