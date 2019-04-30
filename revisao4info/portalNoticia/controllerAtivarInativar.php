<?php
	include ("Noticia.php");
	$listarNoticia = new Noticia();
	
	$id = filter_input(INPUT_GET, "id");
	$situacao= filter_input(INPUT_GET, "situacao");
	
	$retorno = $listarNoticia->ativarInativar($id,$situacao);
	//1 - Personalizar mensagem
	//2 - Separar Ativar do Inativar
	if($retorno) {
		echo "Notícia ativada ou inativada com sucesso";
	}else {
		echo "Erro ao ativar ou inativar a notícia";
	}	
	
?>	
