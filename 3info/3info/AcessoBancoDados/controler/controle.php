<?php
  include("../model/Pessoa.php");
  $pessoa1 = new Pessoa();

  $nome = $_POST["nome"];
  $email =$_POST["email"];
  $dataNascimento = $_POST["dataNascimento"];

  $inserir = $pessoa1->cadastrar($nome, $email, $dataNascimento);
  if ($inserir==1){
    header('location: ../view/formulario.php?mensagem=sucesso');
  }else{
    header('location: ../view/formulario.php?mensagem=erro');
  }
?>
