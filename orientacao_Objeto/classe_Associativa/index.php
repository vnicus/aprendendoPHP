<?php
require_once "Ator.class.php";
require_once "Filme.class.php";
require_once "Papel.class.php";

$ator = new Ator("Bred Pit");
$filme = new Filme("Trem Bala");

$papel = new Papel("João de Elite", $filme, $ator);

/* echo "<pre>";
var_dump ($papel);
echo "</pre>"; */

echo "<h2>Filme {$filme->getNome()} - Atores e seus papeis</h2>";

echo "<strong>Nome do Papel:</strong> {$papel->getNome()}<br>";
echo "<strong>Ator:</strong> {$papel->getAtor()->getNome()}<br>";
echo "<strong>Filme:</strong> {$papel->getFilme()->getNome()}<br>";

?>