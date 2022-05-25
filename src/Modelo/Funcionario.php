<?php

namespace Projeto\Banco\Modelo;

use Projeto\Banco\Modelo\Pessoa;
use Projeto\Banco\Modelo\Cpf;

class Funcionario extends Pessoa
{
    private $cargo;
    
    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        parent::__construct($nome,$cpf);
        $this->cargo = $cargo;
    }

    public function recuperarCargo():string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome):void
    {
        $this->validarNome($nome);
        $this->nome = $nome;
    }
}