<?php
class Produto
{
    public function __construct(
        private string $nome = "",
        private string $descricao = "",
        private float $preco = 0.00,
        private int $estoque = 0,

        //associação com a classe Fornecedor
        private array $fornecedor = array()
    ) {
    }
}
?>