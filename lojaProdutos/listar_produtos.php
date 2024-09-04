<?php
    if($_GET == true){

        require_once "Produtos.class.php";

       $obj_prod = new Produtos();
       $obj_prod = new Produtos(nome_prod:$_GET["nome_prod"], descricao:$_GET["descricao"], valor:$_GET["valor"]);

        $connect = $obj_prod -> conexao();

        $msg = $obj_prod ->inserirNoBanco($connect);

        header("location:index.php?msg=$msg");
        die();

    } 
    else{
        header("location:form_produtos.html");
    }
?>