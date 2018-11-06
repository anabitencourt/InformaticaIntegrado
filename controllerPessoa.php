<?php
// 1 - receber os dados do formulário com o filtro
	$nome = filter_input(INPUT_POST, "nome");
	$email = filter_input(INPUT_POST, "email");
// 2 - montar a string de consulta ao banco de dados
	//tabela pessoa
	
	
	
	$sql = "insert into pessoa (nome, email) 
				values ('$nome', '$email')";
					
	// 3 - conexão com o banco de dados
	include("conexao.php");
	
	// 4 - executar a consulta ao banco de dados
	
	$inserir = $conectar->query($sql);	
	
	
//verificar se foi gravado as informações	
	//$num_rows = $inserir->affect_rows;
	
?>