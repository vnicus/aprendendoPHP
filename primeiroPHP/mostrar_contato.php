<?php

//if($_GET == true)
if($_GET == true) //valida se o formulario foi respodido, se é true
{
    //linka o arquivo Cliente.class.php com o arquivo mostrar_contato.php
    require_once "Cliente.class.php";
    /*tipos de requerimentos
    require_once, require, include e include_once*/


    $obj = new Cliente(); //construtor
    $obj = new Cliente (nome:$_GET["nome"], sobrenome:$_GET["sobrenome"], cpf:$_GET["cpf"]); 
    //-> dessa forma é mais simple e preenche os var de acordo com a expecificação antes dos ":"

    //abrir conexão com o Banco de Dados
    $conect = $obj -> conexao();

    $msg = $obj -> inserir($conect);

    header("location:index.php?msg=$msg"); //apos o registro do cliente, será redirecionada para o index.php + $msg
    die(); //boa pratica, o 'die' encerra de forma forçada a função


    // $obj -> nome = $_GET["nome"];
    // $obj -> sobrenome = $_GET["sobrenome"];
    // $obj -> cpf = $_GET["cpf"];

    // $obj = new Cliente ($_GET["nome"], $_GET["sobrenome"], $_GET["cpf"]); -> dessa forma ele preenche as vars pela a posição
    

    //chamando o metedo dentro da Classe Cliente
    //$obj -> inserir();


    //esse comando é para programdores, serve para verificar
/*  echo "<pre>";
    var_dump($obj);
    echo "</pre>";
*/

    /* echo "O nome é " . $_GET["nome"] . "<br>"; //echo é o escreva do php
     echo "O sobrenome é {$_GET["sobrenome"]}<br>"; */
}
else
{
    //redirencionar o user para pagina form_Cliente.html novamente caso get não tenha conteudo, seja = false
    header("location:form_Cliente.html");
}
?>