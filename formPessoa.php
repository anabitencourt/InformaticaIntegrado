github.com/rafaelflorindo/InformaticaIntegrado
<h1>CADASTRO DE PESSOA</h1>
<fieldset>
	<legend>Dados Pessoais</legend>
	<form action="controllerPessoa.php" method="POST">
		<label>Nome:</label>
		<input type="text" name="nome">
		<label>E-mail:</label>
		<input type="email" name="email">
		<br><br>	
		<input type="submit" value="CADASTRAR">
	</form>
</fieldset>	


<?php
//o trecho abaixo, lista os registros da tabela pessoa
	include("classePessoa.php");
	
	$pessoa = new Pessoa();
	$retorno = $pessoa->listarPessoa();
	//contar quantas posições tem no vetor 
	$numeroRegistro = count($retorno);
	
	if($retorno) {
	?>
	<fieldset>
<legend>Pessoas cadastradas</legend>
	<table border="1">
		<th>Código</th>
		<th>Nome</th>
		<th>E-mail</th>
	
	<?php
		foreach($retorno as $valor){
	?>
	<tr>
		<td><?php echo $valor["id"];?></td>
		<td><?php echo $valor["nome"];?></td>
		<td><?php echo $valor["email"];?></td>
	</tr>
		<?php
	}
	?>
	</table>
	Foram Encontrados <?php echo $numeroRegistro; ?> registros.
</fieldset>
<?php
}
?>

