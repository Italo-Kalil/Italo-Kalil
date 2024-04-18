<?php

declare(strict_types=1);

namespace App\Tipocontas;

use App\Conta_bancaria;

class Conta_corrente extends Conta_bancaria
{

    const TAX = 1.06;
    const TIPO_CONTA = "Conta_corrente";

    public function __construct(
        string $nomeTitular,
        string $banco,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) {
        parent::__construct($nomeTitular, $banco, $numeroAgencia, $numeroConta, $saldo);
    }

    public function obtersaldo(): string
    {
        return 'Seu saldo atual é: R$ ' . number_format(($this->saldo - self::TAX), 2, ',', '');
    }
}
