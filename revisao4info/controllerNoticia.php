<?php
	include_once("Noticia.php");
	$objetoNoticia = new Noticia();
	//fazer o formulário
	//receber os dados do formulário
	
	$titulo = "POO";
	$descricao = "Programação Orientada a Objetos";
	$autor = "Rafael ";
	$dataPublicacao = "2019-02-25";
	$curso = "Técnico em Informática";
	
	$dados=array($titulo, $descricao, $autor, $dataPublicacao, $curso);
	$objetoNoticia->cadastrar($dados);
?>