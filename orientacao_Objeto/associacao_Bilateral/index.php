<a href="index2.php">Exibir Produtos </a>
<?php
require_once "Produto.class.php";
require_once "Fornecedor.class.php";

$produto1 = new Produto("Lápis preto", "Lápis preto num 6", 3.20, 1000);
$produto2 = new Produto("Caixa de Lápis de cor", "Caixa com 12 unidades", 20, 100);

$fornecedor1 = new Fornecedor("Faber_Castell", "00.000.000/0001-90", "12 98123-321", array($produto1, $produto2));

//inserindo novo produto no fornecedor, apos a declaração
$produto3 = new Produto("Borracha", "Borracha TOP TOP", 3.10, 2000);
$fornecedor1->setProduto($produto3);


echo "<h3>Fornecedor</h3>";
echo "Razão Social: {$fornecedor1->getRazaoSocial()}<br>";
echo "CNPJ: {$fornecedor1->getCnpj()}<br>";
echo "Telefone: {$fornecedor1->getTelefone()}<br>";

echo "<h4>Produtos</h4>";
//laço de repediçao para array
foreach ($fornecedor1->getProduto() as $produto) {
    echo "Nome: {$produto->getNome()}<br>";
    echo "Descrição: {$produto->getDescricao()}<br>";

    $preco = number_format($produto->getPreco(), 2, ",", ".");

    echo "Preço: R$ $preco <br>";

    echo "Estoque: {$produto->getEstoque()} <br><br>";
}


//Exibir os fornecedores em um produto

$fornecedor2 = new Fornecedor("Prismacolor", "22.222.222/0001.22", "(21) 8002-8922", array($produto3, $produto2));

$produto4 = new Produto("Lápis azul", "Lápis azul num 6", 3.20, 1000, array($fornecedor1, $fornecedor2));

echo "<hr>";
echo "<h3>Produtos</h3>";
echo "Nome Produto: {$produto4->getNome()}<br>";
echo "Descrição: {$produto4->getDescricao()}<br>";

$preco = number_format($produto4->getPreco(), 2, ",", ".");
echo "Preço: $preco <br>";

echo "<h4>Fornecedor</h4>";
//laço de repediçao para array
foreach ($produto4->getFornecedor() as $fornecedor) {
    echo "Razão Social: {$fornecedor->getRazaoSocial()}<br>";
    echo "CNPJ: {$fornecedor->getCnpj()}<br>";
    echo "Telefone: {$fornecedor->getTelefone()} <br><br>";
}
?>