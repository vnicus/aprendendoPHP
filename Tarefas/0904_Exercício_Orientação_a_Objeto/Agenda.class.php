<?php
class Agenda extends Horario
{

    public function __construct(
        private int $ano = 0,

        string $data = "", string $hora = ""
    ) {
        parent::__construct($data, $hora);
    }

    //Get e Set
    public function getAno(){
        return $this -> ano;
    }
    public function setAno($ano){
        $this -> ano = $ano;
    }

}// Fim Classe
