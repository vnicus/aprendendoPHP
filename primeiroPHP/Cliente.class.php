<?php
    class Cliente //formatação começar sempre com letra maiuscula
    {
        //atributos da classe cliente

        //public é paremetro para visibilidade do atributo no codigo
        //string é o tipo do atributo
        //todo atributo no PHP começa com $

        public function __construct( //__construct é gerar um construtor personalizado, pode ser feito um constutct por classe
        public int $id_cliente = 0,
        public string $nome = "",
        public string $sobrenome = "",
        public string $cpf = ""){}

        //metodos
        public function inserir($conexao)
        {
            $sql = "INSERT INTO cliente (nome, sobrenome, cpf) VALUES (?,?,?)"; //valeu com ? é medida de segurança
            
            $stm = $conexao -> prepare($sql);

            $stm -> bindvalue(1,$this-> nome);
            $stm -> bindvalue(2,$this-> sobrenome);
            $stm -> bindvalue(3,$this-> cpf);

            $stm -> execute();

            return "Cliente registrado com sucesso!";
        }


        public function conexao()
        {
            //parametros para abrir conexão com o banco de dados utilizando a classe PDO
            $parametros = "mysql:host=localhost;dbname=exemplo;charset=utf8mb4";

            //criando um objeto da classe PDO, que é um classe que vem com o PHP
            //usuario = root e senha = " "
            $conexao = new PDO($parametros, "root", "");

            //retornando a conexão aberta
            return $conexao;

        }

        public function buscar_todos_cliente($conexao){
            
            $sql = "SELECT * FROM cliente"; // Selecionando todos o itens na tabela cliente
           
            $stm = $conexao -> prepare($sql); //prepara a frase
            $stm -> execute();

            return $stm -> fetchAll(PDO::FETCH_OBJ); 
            //FETCH_NUM e FETCH_ASSOC
            

        }
    }//fim da classe cliente
?>