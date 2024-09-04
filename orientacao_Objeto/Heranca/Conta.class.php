<?php
class Conta
{
    public function __construct(
        protected string $agencia = "",
        protected string $numero = "",
        protected string $titular = "",
        protected float  $saldo = 0.00
    ) {}


    //Gets e Setters
    public function getAgencia()
    {
        return $this->agencia;
    }
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getTitular()
    {
        return $this->titular;
    }
    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    // é possivel tipar o parametro e dar um valor inicial ao realizar o metodo ex.: (float $valor = 0), disse que '$valor' é tipo float com valor igual a 0

    //Metodos
    public function sacar($valor)
    {
        $this->saldo -= $valor;

        // $this->saldo = $this->saldo - $valor;
    }
    public function despositar($valor)
    {
        $this->saldo += $valor;
    }
} //fim class CONTA
