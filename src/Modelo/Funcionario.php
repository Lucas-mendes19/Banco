<?php

namespace Projeto\Banco\Modelo;

use Projeto\Banco\Modelo\Pessoa;
use Projeto\Banco\Modelo\Cpf;

class Funcionario extends Pessoa
{
    private $cargo;
    private $salario;
    
    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome,$cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperarCargo():string
    {
        return $this->cargo;
    }
    public function recuperarSalario():string
    {
        return $this->salario;
    }

    public function alteraNome(string $nome):void
    {
        $this->validarNome($nome);
        $this->nome = $nome;
    }

    public function calculaBonificacao():float
    {
        return $this->salario * 0.1;
    }
}