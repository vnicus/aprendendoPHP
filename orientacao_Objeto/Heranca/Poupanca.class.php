<?php
class Poupanca extends Conta // declarando de onde a classe 'Poupanca' ira herdar  da classe pai os atributos
{
    public function __construct(
        private int $aniversario = 0,

        // recebendo o atributos da classe 'Conta' como parametro, não precisa declarar se é private ou public
        string $agencia = "",
        int $numero = 0,
        string $titular = "",
        float $saldo = 0.00
        
    ) {
        // Classe filho recebendo a herança da classe pai 'Conta'
        parent::__construct($agencia, $numero, $titular, $saldo);
    }


    //Gets e Setters
    public function getAniversario()
    {
        return $this->aniversario;
    }
    public function setAniversario($niver)
    {
        $this->aniversario = $niver;
    }
}
