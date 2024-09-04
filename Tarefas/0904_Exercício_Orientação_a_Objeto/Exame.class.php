<?php
    class Exame extends Servico
    {
        public function __construct(
            private string $medida_preventiva = "",
            private string $tipo_exame = "",

            //Herança
            string $descricao = "", float $preco = 0.00
        )
        {
            parent::__construct($descricao, $preco);
        }


        //Get e Set
        public function getMedidaPreventiva(){
            return $this->medida_preventiva;
        }
        public function setMedidaPreventiva($medida_preventiva){
            $this -> medida_preventiva = $medida_preventiva;
        }

        public function getTipoExame(){
            return $this ->tipo_exame;
        }
        public function setTipoExame($tipo_exame){
            $this ->tipo_exame = $tipo_exame;
        }
    }//Fim Classe
?>