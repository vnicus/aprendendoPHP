<?php
class Horario 
{
    public function __construct(
        private string $data = "",
        private string $hora = ""
    ) {}


    //Gets Setters
    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
    }

    public function getHora()
    {
        return $this->hora;
    }
    public function setHora($hora)
    {
        $this->hora = $hora;
    }
}//Fim classe
