<?php
    class Cliente //formatação começar sempre com letra maiuscula
    {
        //atributos da classe cliente

        //public é paremetro para visibilidade do atributo no codigo
        //string é o tipo do atributo
        //todo atributo começa com $

        public function __construct( //__construct é gerar um construtor personalizado
        public string $nome = "",
        public string $sobrenome = "",
        public string $cpf = ""){}

        //metodos
        public function inserir()
        {
            echo "estou no metodo inserir";
        }

    }//fim da classe cliente
?>