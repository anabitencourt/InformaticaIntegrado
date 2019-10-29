<?php
//include a classe pessoa
include("Pessoa.php");
/*instanciando a classe Pessoa
no objeto $pessoa1*/
$pessoa1 = new Pessoa();
//forma dinâmica
$pessoa1->nome = $_POST["nome"];
$pessoa1->email = $_POST["email"];
//forma estática
//$pessoa1->nome = "Rafael";
//$pessoa1->email = "rafael@com";
//invocando o método listar
$pessoa1->listar();








/*
echo "Nome: " . $pessoa1->nome;
echo "<br>E-mail: " . $pessoa1->email;
*/
?>
