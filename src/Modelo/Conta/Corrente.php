<?php

namespace Projeto\Banco\Modelo\Conta;

class Corrente extends Conta
{
    public function transferir(float $valorTransferencia, Conta $contaDestino): void
    {
        if($this->saldo < $valorTransferencia){
            echo "Saldo indisponivel.";
            return;
        }
            
        $this->sacar($valorTransferencia);
        $contaDestino->depositar($valorTransferencia);
    }

    public function porcentagemSaque():float
    {
        return 0.02;
    }
}