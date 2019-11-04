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
    //query de consulta para inclusão
    echo $sqlInsert = "insert into pessoa
    (nome, email)
    values
    ('{$this->getNome()}','{$this->getEmail()}')";
    //executar a query
    include("Conexao.php");

    $conectar = new Conexao();

    if($retornoInsert = $conectar->getConectar()->query($sqlInsert)){
      return 1;//retorna 1 caso seja gravado
    }else {
      return 0;//retorna 0 caso não seja gravado
    }
  }
  public function listar(){
    echo "Nome: " . $this->getNome();
    echo "<br>E-mail: " . $this->getEmail();
  }
}
?>
