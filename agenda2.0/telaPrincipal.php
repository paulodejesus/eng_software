<?php
	//session_start();
	//$login = $_SESSION['loginOk'];
	//if(!$login == 'Ok'){
	//	header("Location: login.php");	
//						unset($_SESSION['loginErro']);

	//}			
?>

<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8"> 
	<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="assets/style/css.css"/>
	
	</script>
	<!--<script type="text/javascript" src="assets/js/script.js"></script> -->

	<title>Agenda 2.0</title>	
</head>
<body>
	<div class="userlog">
		<!--Busca a categoria do usuario que entrou no sistema-->
		<label><a href="http://localhost/agenda2.0/login.php">  <img src="assets/images/icons/sair.png"></a></label>
		<label>Logged in as: 
		<?php
		
			include 'assets/PHP/permissoes.php';
			$re = new Factory();
			$pe = $re->retornaPermissao();
			$resultado = $pe -> permissao();
			echo $resultado;
		?>
		</label> 
		<div class="teste2">
			<img src="assets/images/logo/logo.png">
		</div>
	</div>
</div>
<div class="corpo"> 
	<div class="containertop">
		<div class="pagetitle">
			<div class="title">
				Contacts.com
			</div>
			<div class="version">
				V1.2
			</div>
		</div>
	</div>
</div>
<div class="menu">
<!--Ver lista completa -->
<button class="btnMenu" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">LISTA COMPLETA</button>
	<div id="id05" class="modal">
		<form class="modal-content2 animate"  >
        	<div class="container">
				<ul> 
	   				<h2 class="titulo">Lista Completa </h2>   
					<li>
						<div class="principal">
						    <div class="listagem">
								<table>
									<tr>
										<th >NOME</th>
									    <th >SETOR</th>
									    <th >TELEFONE</th>
									    <th >CELULAR</th>	
									    <th >E-MAIL</th>
									</tr>
									<?php 
										include_once 'assets/PHP/pessoa.php';
										$pe = new pessoa();
										$all = $pe -> buscaUsuario();						
									?>
								</table>
						 	</div>
						</div>	
					</li>
					<li class="botoes">
							<button class="btn" id="btnCancel" type="button" onclick="document.getElementById('id05').style.display='none'">VOLTAR</button>
						</li>
				</ul>	   		
	   		</div>
  		</form>
	</div>
<!--Fim Ver lista completa -->
	<?php  
	//session_start();
	$permissao = $_SESSION['variavel'];	
	if($permissao == '1'){}else{
	?>
		<button class="btnMenu" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">ADD NOVO CONTATO</button>
	<?php } ?>
	<div id="id01" class="modal">
  		<form class="modal-content animate" method="post" action="assets/PHP/processa.php">
    	    <div class="container">
	   			<ul> 
	   				<h2 class="titulo">NOVO CONTATO</h2>   
						<li>
							<label>Nome:</label>  
							<input class="campos" name="nome" type="text" placeholder="Nome Completo" />
						</li>
						<li>
							<label>Setor:</label>
							 <input class="campos"  name="departamento" type="text" placeholder="Setor do Contato" /> 
						</li>
						<li>
							<label>Ramal:</label>
							<input class="campos" name="ramal" type= "tel"  maxlength="5"  title="Apenas números" placeholder="Ex: xxxxx" />
						</li>
						<li>
							<label>Celular:</label>
							<input class="campos" name="fone" type= "tel"  placeholder="Ex:xx-xxxxx-xxxx" />
						</li>
						
						<li>
							<label>E-mail</label>
							<input class="campos" name="email" type= "email"  placeholder="E-mail"/>
						</li>
						<li class="botoes">
							<button class="btn" id="btnCancel" type="button" onclick="document.getElementById('id01').style.display='none'">VOLTAR</button>
							<button class="btn" id="btnSalvar"  type="submit" >SALVAR </button>
							
						</li>
				</ul>
      		</div>
  		</form>
	</div>


<button class="btnMenu" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">ADD NOVO RECADO</button>
	<div id="id03" class="modal">
		<form class="modal-content animate" method="POST" action="assets/PHP/processaRecado.php" >
        	<div class="container">
				<ul> 
	   				<h2 class="titulo">CRIAR RECADO</h2>   
					<li>
						<label >Nome do Recado: </label>
						<input class="campos" name="titulo_recado" type="text"  placeholder="TITULO DO RECADO " />
					</li>
					<li>
						<textarea name="texto" rows="20" cols="80" maxlength="500"></textarea>
					</li>
					<li class="botoes">
							<button class="btn" id="btnCancel" type="button" onclick="document.getElementById('id03').style.display='none'">VOLTAR</button>
							<button class="btn" id="btnSalvar"  type="submit" >SALVAR </button>
							
						</li>
				</ul>	   		
	   		</div>
  		</form>
	</div>
<button class="btnMenu" onclick="document.getElementById('id04').style.display='block'" style="width:auto;">EXIBIR RECADOS</button>
	<div id="id04" class="modal">
		<form class="modal-content animate" >
        	<div class="container">
        		<ul> 
	   				<h2 class="titulo">LISTA DE RECADOS</h2>   
					<li>
						
						<label >Nome do Recado: </label>
						<select  name="select">
							<option value="valor1" selected="" >Selecione</option> 
					    	<option value="valor1">Recado 001</option> 
  							<option value="valor2">Recado 002</option>
 							<option value="valor3">Recado 003</option>
						</select>
					</li>
					<li>
						<textarea rows="20" cols="82" maxlength="500" readonly="">
						<!--TEXTO AQUI -->
						</textarea>
					</li>
					<li class="botoes">
							<button class="btn" id="btnCancel" type="button" onclick="document.getElementById('id04').style.display='none'">VOLTAR</button>
							<button class="btn" id="btnExcluir"  > EXCLUIR </button>
						</li>
				</ul>
        	</div>
  		</form>
	</div>
</div>
<div class="principal2">
    <div class="listagem">
		<table>
			<th class="t7">
				RECÉM-ADICIONADOS
			</th>
			
			<?php 
				include_once 'assets/PHP/pessoa.php';
				$pe = new pessoa();
				$all = $pe -> buscaUltimosUsuarios();						
			?>
		</table>
 	</div>
</div>
<div class="base">
	Developed by Ciência da Computação - 2018
</div>
</body>

</html>
