<?php
    require_once "Cliente.class.php";
    
    $cliente = new Cliente();
    $conect = $cliente->conexao();
    $resultado = $cliente -> buscar_todos_cliente($conect);

    // echo "<pre>";
    // var_dump($resultado);
    // echo "</pre>";

    if($_GET)
    {
        echo $_GET["msg"];
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cliente</title>

    <link rel="stylesheet" href="css/estilo_index.css">

</head>
<body>
    <h1>Clientes</h1>
    <a href="form_Cliente.html"><button>Novo Cliente</button></a>

    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>
            <?php
                //laço de repetição para matrizes, 'foreach'
                foreach($resultado as $dado)
                {
                    echo "<tr>
                         <td>{$dado->nome}&nbsp;{$dado->sobrenome}</td>
                         <td>{$dado->cpf}</td>
                         </tr>";
                    
                 
                    /* Com o foreach é feita a repedição de acordo com o tamanha da matriz
                    sem variavel de controle */

                }
            ?>
        </tbody>
    </table>

</body>
</html>
