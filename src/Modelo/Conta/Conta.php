<?php

namespace Projeto\Banco\Modelo\Conta;

use Projeto\Banco\Modelo\Conta\Titular;

abstract class Conta
{
    protected $titular;
    protected $saldo;
    protected static $numeroContas = 0;
    protected $tipo;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroContas++;
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }
    
    public function sacar(float $valorSaque):void
    {
        $tarifa = $valorSaque * $this->porcentagemSaque();
        $valorSaque += $tarifa;
        if($valorSaque > $this->saldo){
            echo "Saldo invalido.";
            return;
        }
            
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorDepositar):void
    {
        if($valorDepositar < 0){
            echo "Deposite um valor positivo.";
            return;
        }
        
        $this->saldo += $valorDepositar;
    }

    public function exibirSaldo():float
    {
        return $this->saldo;
    }

    public static function exibirNumeroContas():int
    {
        return self::$numeroContas;
    }

    public function recuperarNomeTitular():string
    {
        return $this->titular->exibirNome();
    }

    public function recuperarCpfTitular():string
    {
        return $this->titular->exibirCpf();
    }

    abstract public function porcentagemSaque():float;
}