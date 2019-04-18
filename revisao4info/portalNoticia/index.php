<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Portal Notícia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Painel Control Notícia</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>


    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Controle
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Cadastro</a>
        <a class="dropdown-item" href="#">Alterar</a>
        <a class="dropdown-item" href="#">Ativar</a>
        <a class="dropdown-item" href="#">Inativar</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Sair</a>
    </li>
  </ul>
</nav> 
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<form action="/action_page.php">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
					    <label for="titulo">Título:</label>
					    <input type="text" class="form-control" id="titulo" name="titulo">
			  		</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="autor">Autor:</label>
			 		   <input type="text" class="form-control" id="autor" name="autor">
				  </div>
				</div>
			</div>
				
				
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="curso">Curso:</label>
				    <input type="text" class="form-control" id="curso" name="curso">
				  </div>
				</div>
				<div class="col-sm-6">
  				  <div class="form-group">
  				  <h2>Situação</h2>
					<div class="form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Ativo</label>
					</div>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
			  		<div class="form-group"	>
			   		 <label for="descricao">Descrição:</label>
			    			<textarea class="form-control" id="descricao" name="descricao">
			    </textarea>
			  		</div>
				</div>
			</div>
			  <button type="submit" class="btn btn-primary">CADASTRAR</button>
			</form> 	
		</div><!--fecha coluna principal-->
	</div><!--fecha linha principal-->
</div><!--fecha container-->

</body>
</html> 