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

    //Get e Setters
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }

    public function getFornecedor()
    {
        return $this->fornecedor;
    }
    public function setFornecedor(Fornecedor $fornecedor)
    {
        //para chamar um atribo do tipo array deve colocar o []
        $this->fornecedor[] = $fornecedor;
    }
}
?>