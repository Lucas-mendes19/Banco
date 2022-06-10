<?php

namespace Projeto\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeNivel():void
    {
        $this->recebeAumento($this->recuperarSalario() * 0.7);
    }

    public function calculaBonificacao():float
    {
        return 500.0;
    }

}