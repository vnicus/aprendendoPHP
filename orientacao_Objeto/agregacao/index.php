<?php
require_once "Categoria.class.php";
require_once "Produto.class.php";

//criando uma categoria
$categoria1 = new Categoria("Material Escolar", array($produto1, $produto2, $produto3, $produto4));

//produtos
$produto1 = new Produto("Caderno", "Caderno com 96 Folhas", 15.3, 120, $categoria1);
$produto2 = new Produto("Apontador", "Apontador Rosa", 5.99, 1000, $categoria1);

echo "<h3>Produto 1</h3>";

echo "Nome: {$produto1->getNome()}<br>";
echo "Descrição: {$produto1->getDescricao()}<br>";
echo "Preço: {$produto1->getPreco()}<br>";
echo "Estoque: {$produto1->getEstoque()}<br>";


echo "Categoria: {$produto1-> getCategoria()->getDescritivo()}<br><br>";

echo "<hr>";

//produtos
$produto3 = new Produto("Borracha", "Borracha apaga tudo", 4.5, 500, $categoria1);
$produto4 = new Produto("Lapis Preto", "Lapis Preto", 5, 150, $categoria1);

echo "<h3>Categoria<h3>";

echo "Descritivo: {$categoria->getDescritivo()}<br>";
foreach ($categoria1 as $categoria){}
?>