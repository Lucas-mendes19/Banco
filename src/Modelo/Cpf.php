<?php

namespace Projeto\Banco\Modelo;

final class Cpf
{
    private $cpf;
    
    public function __construct(string $cpf){
        $this->cpf = $cpf;
    }

    public function mostrarCpf():string
    {
        return $this->cpf;
    }
}