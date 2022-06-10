<?php

namespace Projeto\Banco\Modelo\Conta;

use Projeto\Banco\Modelo\Pessoa;
use Projeto\Banco\Modelo\Cpf;
use Projeto\Banco\Modelo\Endereco;
use Projeto\Banco\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome,$cpf);
        $this->endereco = $endereco;
    }
    
    public function exibirEndereco():Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha):bool
    {
        return $senha === 'abcd';
    }
}