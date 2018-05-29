<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/css.css"/>
 	<meta charset="UTF-8">
	<title>Alterar</title>	
	<?php  
		session_start();
		$permissao = $_SESSION['variavel'];
		if($permissao == '2'){
			//echo  "<script>alert('Acesso Negado');</script>";
			header("Location: ../../telaPrincipal.php");

		}else{


		$id = filter_input(INPUT_GET, "id");
		$nome = filter_input(INPUT_GET, "nome");
		$departamento = filter_input(INPUT_GET, "departamento");
		$ramal = filter_input(INPUT_GET, "ramal");
		$celular = filter_input(INPUT_GET, "celular");
		$email = filter_input(INPUT_GET, "email");
	}
	?>
</head>
<body>

	<div  id="conteudo">
		
		<form class="modal-content animate"  action='../PHP/editarContatos.php'>
			<div class="container2">
	   			<ul> 
	   				<h2 class="titulo">EDITAR CONTATO</h2>   
						<form action='../PHP/editarContatos.php'>
							<li>
								<label>ID</label>
								<input class="campos2" type="text" name="id" value="<?php echo $id ?>"readonly/> 			
							</li>
							<li>
								<label>Nome</label>
								<input class="campos2"type="text" name="nome" value="<?php echo $nome ?>"/>		
							</li>
							<li>
								<label>Setor</label>
								<input class="campos2"type="text" name="departamento" value="<?php echo $departamento ?>"/>		
							</li>
							<li>
								<label>Ramal</label>
								<input class="campos2"type="text" name="ramal" value="<?php echo $ramal ?>"/>
							</li>
							<li>
								<label>Celular</label>
								<input class="campos2"type="text" name="celular" value="<?php echo $celular ?>"/>		
							</li>
							<li>
								<label>E-mail</label>
								<input class="campos2"type="text" name="email" value="<?php echo $email ?>"/>	
							</li>
							<li class="botoes">
								<button class="btn" id="btnCancel">
									<a href="http://localhost/agenda2.0/telaPrincipal.php">VOLTAR </a>
								</button>

								<button class="btn" id="btnSalvar"  type="submit" >SALVAR </button>

							</li>	
						</form>
				</ul>
      			</div>
			</form>
	</div>
</body>
</html>