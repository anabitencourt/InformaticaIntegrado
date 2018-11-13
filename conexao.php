
<?php
	$local = "localhost";
	$user = "root";
	$password = "";
	$database = "3info";
	//instanciando a classe mysqli e passando por parâmetro
	//os dados de acesso a base de dados
	$conectar = new mysqli($local, $user, $password, $database);
?>