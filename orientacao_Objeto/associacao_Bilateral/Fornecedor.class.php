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

    //Get e Setters
    public function getRazaoSocial()
    {
        return $this->razao_social;
    }
    public function setRazaoSocial($razao_social)
    {
        $this->razao_social = $razao_social;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function setProduto(Produto $produto)//no parametro esta sendo feito uma tipagem forte, onde especifica que somente a variavel $produto só recebe valor do tipo Produto
    {
        //para chamar um atribo do tipo array deve colocar o []
        $this->produto[] = $produto;
    }

}
?>