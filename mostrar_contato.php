<?php

//if($_GET == true)
if($_GET) //valida se o formulario foi respodido, se é true
{
    //linka o arquivo Cliente.class.php com o arquivo mostrar_contato.php
    require_once "Cliente.class.php";

    $obj = new Cliente(); //construtor

    $obj -> nome = $_GET["nome"];
    $obj -> sobrenome = $_GET["sobrenome"];
    $obj -> cpf = $_GET["cpf"];

    //chamando o metedo dentro da Classe Cliente
    $obj -> inserir();


    //esse comando é para programdores, serve para verificar
    echo "<pre>";
    var_dump($obj);
    echo "</pre>";

    // echo "O nome é " . $_GET["nome"] . "<br>"; //echo é o escreva do php

    // echo "O sobrenome é {$_GET["sobrenome"]}<br>";
}
else
{
    //redirencionar o user para pagina index.html novamente
    header("location:index.html");
}
?>