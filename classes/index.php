<?php
require "Usuario.php";



/*$aluno = new Usuario();
$aluno->nome = "Maria";
$aluno->idade = 20;
$aluno->email = "maria@ig.com.br";

$aluno2 = new Usuario();
$aluno2->nome = "João";
$aluno2->idade = 30;
$aluno2->email = "joao@ig.com.br";

var_dump($aluno);
echo "<br>";
var_dump($aluno2); */

$aluno = new Usuario();
$aluno->setNome("Maria");
$aluno->setIdade(20);
$aluno->setEmail("maria@ig.com.br");

echo "<p>Nome: {$aluno->getNome()}</p>";
echo "<p>Idade: {$aluno->getIdade()}</p>";
echo "<p>Email: {$aluno->getEmail()}</p>";

echo "<br>";

$aluno2 = new Usuario();
$aluno2->setNome("João");
$aluno2->setIdade(30);
$aluno2->setEmail("joao@ig.com.br");

echo "<p>Nome: {$aluno2->getNome()}</p>";
echo "<p>Idade: {$aluno2->getIdade()}</p>";
echo "<p>Email: {$aluno2->getEmail()}</p>";


?>
