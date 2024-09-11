<?php
require_once "Produto.class.php";
require_once "Fornecedor.class.php";

$produto1 = new Produto("Lápis preto", "Lápis preto num 6", 3.20, 1000);
$produto2 = new Produto("Caixa de Lápis de cor", "Caixa com 12 unidades", 20, 100);

$fornecedor = new Fornecedor("Faber_Castell", "00.000.000/0001-90", "12 98123-321", array($produto1, $produto2));

echo "<pre>";
var_dump($fornecedor);
echo "<pre>";
?>