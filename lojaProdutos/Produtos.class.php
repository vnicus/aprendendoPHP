<?php
    class Produtos{

        public function __construct(
            public int $id_produto = 0,
            public string $nome_prod = "",
            public string $descricao_prod = "",
            public float $valor_prod = 0
        ){}

        public function inserirNoBanco($conexão)
        {
            $commat = "INSERT INTO cliente (nome_prod, descricao_pro, valor_prod) values (?,?,?)";

            $stm = $conexão -> prepare($commat);

            $stm -> bindvalue(1, $this -> nome_prod);
            $stm -> bindvalue(2, $this -> descricao_prod);
            $stm -> bindvalue(3, $this -> valor_prod);

            $stm -> execute();

            return "Produto registrado!"
        }



    }
?>