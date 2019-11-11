<?php
  include("../model/Pessoa.php");
  $pessoa1 = new Pessoa();

  $nome = $_POST["nome"];
  $email =$_POST["email"];

  $inserir = $pessoa1->cadastrar($nome, $email);
  if ($inserir==1){
    echo "Dados gravados com sucesso";
  }else{
    echo "Erro ao gravar os dados";
  }

  $pessoa1->listar();

?>
