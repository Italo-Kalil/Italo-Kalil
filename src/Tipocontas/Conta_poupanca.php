<?php

declare(strict_types=1);

namespace App\Tipocontas;

use App\Conta_bancaria;

class Conta_poupanca extends Conta_bancaria
{
    const RENDIMENTO = 0.03;
    const TIPO_CONTA = "Conta_poupanca";
    public function __construct(
        string $banco,
        string $nometitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) {
        parent::__construct($nometitular, $banco, $numeroAgencia, $numeroConta, $saldo);
    }
    public function obtersaldo(): string
    {

        return 'Seu saldo é de: R$ ' . number_format(($this->saldo + ($this->saldo * self::RENDIMENTO)), 2);
    }
}
