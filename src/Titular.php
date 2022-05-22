<?php

class Titular
{
    private $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validarNome($nome);
        $this->nome = $nome;
    }

    
    private function validarNome(string $nome)
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }

    public function exibirNome():string
    {
        return $this->nome;
    }

    public function exibirCpf():string
    {
        return $this->cpf->mostrarCpf();
    }
}