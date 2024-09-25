<?php
class Ator
{
    public function __construct(
        private string $nome = ""
    ) {
    }

    //get
    public function getNome(){
        return $this->nome;
    }
    
}//fim da classe
?>