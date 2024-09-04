<?php
class Consulta
{
    public function __construct(
        private string $historico = ""
    ) {}

    //Get e Set
    public function getHistorico()
    {
        return $this->historico;
    }
    public function setHistorico($historico)
    {
        $this->historico = $historico;
    }
}//Fim Class
