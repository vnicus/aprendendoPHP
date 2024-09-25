<?php
require_once "Endereco.class.php";
require_once "Pessoa.class.php";

//de um endereço, saberemos de quem pertece

//criando pessoa
$pessoa1 = new Pessoa("Maria da Silva", "111.111.111-11"); //como ja iremos criar o endereço logo embaixo n é necessario preencher os demais parametros, e tbm pq 'pessoa' pode ter varios endereços associados

//criando endereço
$endereco1 = new Endereco("Rua XV de Novembro", "129", "17849087", $pessoa1);
$endereco2 = new Endereco("Rua 17 de Novembro", "300", "17849087", $pessoa1);

/*echo '<pre>';
var_dump( $endereco1);
echo '</pre>';*/

//mostra qual pessoa mora nesse endereço
echo "<h3>Endereço</h3>";
echo "Logradouro: {$endereco1->getLogradouro()}<br>";
echo "Número: {$endereco1->getNumero()}<br>";
echo "CEP: {$endereco1->getCep()}<br>";

echo "<h4>O Endereço pertence</h4>";
echo "Nome: {$endereco1->getPessoa()->getNome()}<br>";
echo "CPF: {$endereco1->getPessoa()->getCpf()}";


//mostrar o endereços de um pessoa 
$pessoa2 = new Pessoa("João Batista", "222.222.222-22", "Rua Ramos", "231", "1222-000"); //o objeto 'endereço' é criando dentro da classe 'Pessoa' se fazer uma associação, caso faça essa associação estará errado na composição.

//add outro endereço da pessoa2
$pessoa2->setEndereco("Rua Pedro Alcatraz", "500", "1222-222", null);

/*echo '<pre>';
var_dump( $pessoa2);
echo '</pre>';*/

echo "<hr>";

echo "<h3>Dados de Pessoa</h3>";
echo "Nome: {$pessoa2->getNome()}<br>";
echo "CPF: {$pessoa2->getCpf()}<br>";

echo "<h3>Endereço</h3>";

foreach ($pessoa2->getEndereco() as $endereco) {
    echo "<strong>Logradouro:</strong> {$endereco->getLogradouro()} - Nº {$endereco->getNumero()}<br>";
    echo "CEP: {$endereco->getCep()}<br><br>";
}



?>