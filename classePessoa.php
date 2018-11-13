<?php
//github.com/rafaelflorindo/InformaticaIntegrado
class Pessoa{
	private $nome, $email;
	//$nome = maria ivone, $email = mariaivone@hotmail.com
	
	public function setNome($nome){//maria ivone
		$this->nome = $nome;//maria ivone	
	}
	public function setEmail($email){//mariaivone@hotmail.com
		$this->email = $email;	
	}
	public function getNome(){
		return $this->nome;	//maria ivone
	}
	public function getEmail(){
		return $this->email;	//mariaivone@hotmail.com
	}
	public function cadastrar($nome, $email){
		$this->setNome($nome);//maria ivone
		$this->setEmail($email);//mariaivone@hotmail.com
		
		//string de consulta (insert, select)
		$sql = "insert into pessoa (nome, email) 
				values ('{$this->getNome()}', 
				'{$this->getEmail()}')";
					
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
		$sql = "SELECT * FROM pessoa order by nome asc";
		$listaPessoa = array();
		
		$listar= $conectar->query($sql);

		while($linha = $listar->fetch_array()) {
			$listaPessoa[] = $linha;		
		}	
		return $listaPessoa;	
	}
}
?>