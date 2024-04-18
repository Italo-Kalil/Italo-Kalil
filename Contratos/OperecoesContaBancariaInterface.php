<?php 

declare(strict_types=1);

namespace App\Contratos;

interface OperacoesContaBancaria
{
    public function sacar(float $valor):string;
    public function depositar(float $valor);
    public function obtersaldo();
}

?>