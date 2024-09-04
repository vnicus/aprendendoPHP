<?php
//encapsulamento
require_once "Produto.class.php";

$produto1 = new Produto("Lapis Preto", "Lápis Preto Número 2", 1000, 2.00);

//Código para exibir e alterar um atributo 'private'
echo $produto1->getNome() . "<hr>"; //get

$produto1->setNome("Caneta Preta"); //set
echo $produto1->getNome();


// O código abaixo não funciona, pois a classe Produtos esta com atributos 'private'
/* echo $produto1 -> nome; //usa o metodo get
 $produto1 -> nome = "Caneta";//usa metodo set */
