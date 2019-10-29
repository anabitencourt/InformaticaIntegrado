<?php
class Pessoa{
  private $nome, $email;
  public function setNome($nome){
    $this->nome = $nome;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getNome(){
    return $this->nome;
  }
  public function getEmail(){
    return $this->email;
  }

  public function cadastrar($nome, $email){
    $this->setNome($nome);
    $this->setEmail($email);
  }
  public function listar(){
    echo "Nome: " . $this->getNome();
    echo "<br>E-mail: " . $this->getEmail();
  }
}
?>
