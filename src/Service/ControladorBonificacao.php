<?php

namespace Projeto\Banco\Service;

use Projeto\Banco\Modelo\Funcionario;

class ControladorBonificacao
{
    private $totalBonificoes = 0;

    public function adicionarBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificoes += $funcionario->calculaBonificacao();
    }

    public function recuperarBonificacaoTotal():float
    {
        return $this->totalBonificoes;
    }
}