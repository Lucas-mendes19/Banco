<?php

namespace Projeto\Banco\Modelo;

final class Endereco{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero){
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua    = $rua;
        $this->numero = $numero;
    }

    public function recuperarCidade():string
    {
        return $this->cidade;
    }

    public function recuperarBairro():string
    {
        return $this->bairro;
    }

    public function recuperarRua():string
    {
        return $this->rua;
    }

    public function recuperarNumero():string
    {
        return $this->numero;
    }

    public function __toString():string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}