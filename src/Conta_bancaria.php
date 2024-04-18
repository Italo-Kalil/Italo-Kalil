<?php

declare(strict_types=1);

namespace App;

use App\Contratos\DadosContaBancariaInterface;
use App\Contratos\OperacoesContaBancaria;

abstract class Conta_bancaria implements DadosContaBancariaInterface, OperacoesContaBancaria
{

    protected String $banco = "Nubank"; //protected permite utilizar em classes filhas
    protected String $nomeTitular = "Italo Kalil";
    protected String $numeroAgencia = "1190";
    protected String $numeroConta = "11945-00";
    protected float $saldo = 0.0;

    // Construct serve para inicializar as variaveis com algum valor
    public function __construct(
        string $nomeTitular,
        string $banco,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) {
        // this serve para fazer referencia de um valor sem acessar a variavel diretamente
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }


    public function depositar(float $valor): string
    {
        $this->saldo += $valor;

        return 'Seu depósito de R$' . number_format($valor, 2, ',', "") . ' Foi realizado';
    }
    public function sacar(float $valor): string
    {
        $this->saldo -= $valor;

        return 'Seu saque de R$ ' . number_format($valor, 2, ',', "") . ' Foi realizado';
    }

    public abstract function obtersaldo(): string;

    public function getBanco(): string
    {

        return $this->banco;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getNumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }


    public function getNumeroConta(): string
    {
        return  $this->numeroConta;
    }
}
