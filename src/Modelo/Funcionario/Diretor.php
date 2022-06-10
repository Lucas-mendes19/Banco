<?php

namespace Projeto\Banco\Modelo\Funcionario;

use Projeto\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao():float
    {
        return $this->recuperarSalario() * 2;
    }

    public function Autenticar(string $senha):bool
    {
        return $senha === '1234';
    }

    public function podeAutenticar(string $senha):bool
    {
        return $senha === '1234';
    }
}