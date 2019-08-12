<?php
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	
	include("conexao.php");
	
	$sql = "insert into cliente (nome, email, telefone) 
	values ('$nome','$email','$telefone')";
	
	echo $sql;
	
	//exit;
	$retornoInserir = $conectar->query($sql);
		
	if($conectar->affected_rows){
		echo "O Cliente <b>$nome</b> foi gravado com Sucesso";	
	}else{
		echo "Não foi possível gravar o registro do Cliente <b>$nome</b>";	
	}
?>