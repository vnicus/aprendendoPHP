<?php
    class Servico {

        public function __construct(
            private string $descricao = "",
            private float $preco = 0.00
        ){}

        //Get e Setters
        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($desc){
            $this->descricao = $desc;
        }

        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($preco){
            $this->preco = $preco;
        }
    }//Fim Classe
?>