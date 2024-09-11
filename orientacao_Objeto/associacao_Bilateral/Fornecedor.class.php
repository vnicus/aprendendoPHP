<?php
class Fornecedor
{
    public function __construct(
        private string $razao_social = "",
        private string $cnpj = "",
        private string $telefone = "",

        //associação com a classe Produto
        private array $produto = array()
    ) {
    }
}
?>