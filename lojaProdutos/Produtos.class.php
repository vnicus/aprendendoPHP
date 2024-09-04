<?php
    class Produtos{

        public function __construct(
            public int $id_produto = 0,
            public string $nome_prod = "",
            public string $descricao = "",
            public int $valor = 0
        ){}

        public function inserirNoBanco($conexao)
        {
            $commat = "INSERT INTO produtos (nome_prod, descricao, valor) values (?,?,?)";

            $stm = $conexao -> prepare($commat);

            $stm -> bindvalue(1, $this -> nome_prod);
            $stm -> bindvalue(2, $this -> descricao);
            $stm -> bindvalue(3, $this -> valor);

            $stm -> execute();

            return "Produto registrado!";
        }

        public function conexao()
        {
            $paramentos = "mysql:host=localhost;dbname=lojaProdutos;charset=utf8mb4";

            $conexao = new PDO($paramentos, "root", "");

            return $conexao;
        }

        public function buscar_produtos($conexao)
        {
            $commat = "SELECT * FROM produtos";

            $stm = $conexao -> prepare($commat);
            $stm  -> execute();

            return $stm -> fetchAll(PDO::FETCH_OBJ);
        }

    }
?>