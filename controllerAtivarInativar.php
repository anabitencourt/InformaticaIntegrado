<?php
	include ("Noticia.php");
	$listarNoticia = new Noticia();
	$id = filter_input(INPUT_GET, "id");
	$situacao= filter_input(INPUT_GET, "situacao");
	
	$listarNoticia->ativarInativar($id,$situacao);
?>	
