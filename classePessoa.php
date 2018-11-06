<?php
//github.com/rafaelflorindo/InformaticaIntegrado
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
		
		$sql = "insert into pessoa (nome, email) 
				values ('{$this->getNome()}', '{$this->getEmail()}')";
					
		// 3 - conexão com o banco de dados
		include("conexao.php");
	
		// 4 - executar a consulta ao banco de dados
		$inserir = $conectar->query($sql);	
	
		//verificar se foi gravado as informações	
		$num_rows = $conectar->affected_rows;
		if ($num_rows==1){
			return 1;	
		}else{
			return 0;
		}
	}
	public function listarPessoa(){
		include ("conexao.php");
		$sql = "SELECT * FROM pessoa order by nome desc";
		$listaPessoa = array();
		
		$listar= $conectar->query($sql);

		while($linha = $listar->fetch_array()) {
			$listaPessoa[] = $linha;		
		}	
		return $listaPessoa;	
	}
}
?>