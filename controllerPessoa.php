<?php
// 1 - receber os dados do formulário com o filtro
	$nome = filter_input(INPUT_POST, "nome");
	$email = filter_input(INPUT_POST, "email");
// 2 - montar a string de consulta ao banco de dados
	//tabela pessoa
	
	include("classePessoa.php");//inclui a classe
	$objPessoa = new Pessoa();//instancia o objeto
	/*chama o método de cadastro e passa por parâmetro os dados: 
	nome e email*/
	$inserir = $objPessoa->cadastrar($nome, $email);

	
	if ($inserir==1){
		echo "Os dados foram gravados com sucesso!!!";
	}else {
		echo "Ocorreu erro ao gravar o registro!!!";
		}
	
?>