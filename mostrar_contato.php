<?php
    //linka o arquivo Cliente.class.php com o arquivo mostrar_contato.php
    require_once "Cliente.class.php";

    $obj = new Cliente();


    //esse comando é para programdores, serve para verificar
    echo "<pre>";
    var_dump($obj);
    echo "</pre>";

    // echo "O nome é " . $_GET["nome"] . "<br>"; //echo é o escreva do php

    // echo "O sobrenome é {$_GET["sobrenome"]}<br>";
?>