<?php
class Limpeza extends Servico
{
    public function __construct(
        private string $material_usado = "",
        private string $dente_tratado = "",

        //Herança
        string $descricao = "", float $preco = 0.00
    ){
        parent::__construct($descricao, $preco);
    }

    //Get e Set
    public function getMaterialUsado(){
        return $this->material_usado;
    }
    public function setMaterialUsado($material_usado){
        $this -> material_usado = $material_usado;
    }

    public function getDenteTratado(){
        return $this -> dente_tratado;
    }
    public function setDenteTratado($dente_tratado){
        $this -> dente_tratado = $dente_tratado;
    }
}//Fim Classe
?>