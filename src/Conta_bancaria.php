<?php

declare(strict_types=1);

namespace App;

class Conta_bancaria{

    private String $banco = "Nubank";
    private String $nomeTitular = "Italo Kalil";
    private String $numeroAgencia = "1190";
    private String $numeroConta = "11945-00";
    private float $saldo = 0.0;

    public function exibirDadosDaConta(): array
    {

        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo'=> $this->saldo,
        ];
    }

    public function getBacno():string{

        return $this->banco;
    }

    public function setBanco(string $banco):void{

         $this->banco = $banco;
    }
    
    public function getNomeTitular():string{
       return $this->nomeTitular;
    }
    
    public function setNomeTitular(string $nomeTitular):void{
        $this->nomeTitular = $nomeTitular;
    }
    public function getNumeroAgencia():string{
       return $this->numeroAgencia;
    }
    public function setNumeroAgencia(string $numeroAgencia):void{
        $this->numeroAgencia = $numeroAgencia;
    }
     
    public function getNumeroConta():string{
      return  $this->numeroConta;
    }
    public function setNumeroConta(string $numeroConta):void{
        $this->numeroConta = $numeroConta;
    }

    public function getSaldo():float{
       return $this->saldo;
    }
    public function setSaldo(float $saldo):void{
        $this->saldo = $saldo;
    }



}
