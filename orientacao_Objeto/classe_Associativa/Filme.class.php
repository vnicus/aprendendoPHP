<?php
class Filme
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