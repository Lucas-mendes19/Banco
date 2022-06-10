<?php

namespace Projeto\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha):bool;
}