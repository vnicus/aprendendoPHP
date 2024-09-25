<?php
class Endereco
{
    public function __construct(
        private string $logradouro = "",
        private string $numero = "",
        private string $cep = "",
        // private Pessoa $pessoa = new Pessoa() -> atributo fortemente tipado, onde ele irá receber valores do tipo Pessoa, ou pode ser usado fracamente tipado onde ficaria  'private $pessoa = null'
        private $pessoa = null
    ) {
    }

    //gets
    public function getLogradouro()
    {
        return $this->logradouro;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function getCep()
    {
        return $this->cep;
    }
    public function getPessoa(){
        return $this->pessoa;
    }

}//fim da classe
?>