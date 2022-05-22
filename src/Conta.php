<?php

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroContas = 0;

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
    
    public function sacar(float $valorSaldo)
    {
        if($valorSaldo > $this->saldo){
            echo "Saldo invalido.";
            return;
        }
            
        $this->saldo -= $valorSaldo;
    }

    public function depositar(float $valorDepositar):void
    {
        if($valorDepositar < 0){
            echo "Deposite um valor positivo.";
            return;
        }
        
        $this->saldo += $valorDepositar;
    }

    public function transferir(float $valorTransferencia, Conta $contaDestino): void
    {
        if($this->saldo < $valorTransferencia){
            echo "Saldo indisponivel.";
            return;
        }
            
        $this->sacar($valorTransferencia);
        $contaDestino->depositar($valorTransferencia);
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
}