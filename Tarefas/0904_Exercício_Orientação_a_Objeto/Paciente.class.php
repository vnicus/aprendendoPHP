<?php

class Paciente
{
    public function __construct(
        private string $nome = "",
        private string $rg = "",
        private string $endereco = "",
        private string $telefone = "",
        private string $data_nascimento = "",
        private string $profissao = ""
    ) {}


    //Get e Setters
    public function getNome(){
        return $this -> nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getRg(){
        return $this -> rg;
    }
    public function setRg($rg){
        $this -> rg = $rg;
    }

    public function getEndereco(){
        return $this -> endereco;
    }
    public function setEndereco($endereco){
        $this -> endereco = $endereco;
    }

    public function getTelefone(){
        return $this -> telefone;
    }
    public function setTelefone($telefone){
        $this -> telefone = $telefone;
    }

    public function getData_nascimento(){ 
        return $this -> data_nascimento;
    }
    public function setData_nascimento($data_nasc){
        $this -> data_nascimento = $data_nasc;
    }

    public function getProfissao(){
        return $this -> profissao;
    }
    public function setProfissao($profissao){
        $this -> profissao = $profissao;
    }
} //fim Classe
