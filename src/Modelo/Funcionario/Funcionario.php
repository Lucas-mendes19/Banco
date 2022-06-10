<?php

namespace Projeto\Banco\Modelo\Funcionario;

use Projeto\Banco\Modelo\Pessoa;
use Projeto\Banco\Modelo\Cpf;

abstract class Funcionario extends Pessoa
{
    private $salario;
    
    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome,$cpf);
        $this->salario = $salario;
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

    public function recebeAumento(float $valorAumento):void
    {
        if($valorAumento < 0 ){
            echo "Valor tem que ser positivo.";
            return;
        }

        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao():float;
}