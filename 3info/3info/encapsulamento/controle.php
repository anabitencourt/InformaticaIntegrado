<?php
include("Pessoa.php");
$pessoa1 = new Pessoa();

$nome = $_POST["nome"];
$email =$_POST["email"];

$pessoa1->cadastrar($nome, $email);
$pessoa1->listar();


//ou
echo "<hr>";
$pessoa1->setNome($_POST["nome"]);
$pessoa1->setEmail($_POST["email"]);
$pessoa1->listar();

?>
