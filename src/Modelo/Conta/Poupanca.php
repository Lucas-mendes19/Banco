<?php

namespace Projeto\Banco\Modelo\Conta;

class Poupanca extends Conta
{
    public function porcentagemSaque():float
    {
        return 0.06;
    }
}