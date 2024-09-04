<?php
class Produto
{
  //Diferença entre public e private nos atributos em um classe
  public function __construct(
    private string $nome = "",
    private string $descricao = "",
    private int $estoque = 0,
    private float $preco = 0.00
  ) {}

  //Metodos Gets e Setters
  //nome do metodo + nome do atributo
  public function getNome()
  {
    return $this->nome;
  }
  public function setNome($nome) //entre () é parametro
  {
    $this->nome = $nome;
    /* A linguagem n confundi o atribo da classe com o parametro, 
    pois ela verifica atributo onde tem $this na frente */
  }

  //Descrição
  public function getDescricao()
  {
    return $this->descricao;
  }
  public function setDescricao($descricao)
  {
    $this->descricao = $descricao;
  }

  //Estoque
  public function getEstoque()
  {
    return $this->estoque;
  }
  public function setEstoque($estoque)
  {
    $this->estoque = $estoque;
  }

  //Preço
  public function getPreco()
  {
    return $this->preco;
  }
  public function setPreco($preco)
  {
    $this->preco = $preco;
  } //fim metodo Gets e Setters

  //Necessario fazer um get e set para todos os Atributos da Classe

} //Fim da classe 
