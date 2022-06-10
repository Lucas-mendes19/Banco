<?php

namespace Projeto\Banco\Modelo;

use Projeto\Banco\Modelo\Cpf;

class Pessoa
{
    protected $nome;
    private $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    final protected function validarNome(string $nome)
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }

    public function recuperarNome():string
    {
        return $this->nome;
    }

    public function recuperarCpf():string
    {
        return $this->cpf->mostrarCpf();
    }
}