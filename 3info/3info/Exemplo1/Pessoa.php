<?php
class Pessoa{
  public $nome, $email;

  public function listar(){
    echo "Nome: " . $this->nome;
    echo "<br>E-mail: " . $this->email;
  }
}

?>
