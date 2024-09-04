<?php

require_once "Produtos.class.php";

$produto = new Produtos();
$connect = $produto->conexao();
$listar = $produto->buscar_produtos($connect);

if ($_GET == true) {
    echo $_GET["msg"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>

<body>
    <fieldset>
        <legend>Lista de Produtos</legend>
        <button><a href="form_produtos.html">Novo Produto</a></button>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>valor</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($listar as $dado) {
                    echo "<tr>
                        <td>{$dado->nome_prod}</td>
                        <td>{$dado->descricao}</td>
                        <td>{$dado->valor}</td>
                        </tr>";
                }

                ?>
            </tbody>
        </table>
    </fieldset>
</body>

</html>