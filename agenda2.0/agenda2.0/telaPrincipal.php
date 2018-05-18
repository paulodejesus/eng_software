<?php
	//session_start();
	if(!isset($_SESSION['loginOk'])){
		//header("Location: login.php");	
//						unset($_SESSION['loginErro']);

	}			
?>

<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8"> 
	<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="assets/style/css.css"/>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<title>Agenda 2.0</title>
</head>
<body>
	<div class="userlog">
		<!--Busca a categoria do usuario que entrou no sistema-->
		<label>Logged in as: 
		<?php
			include 'assets/PHP/permissoes.php';
			$re = new Factory();
			$resultado = $re->retornaPermissao();
			echo $resultado;
		?>
		</label> 
		
	</div>
</div>
<div class="corpo"> 
	<div class="container1">
		<div class="pagetitle">
			<div class="title">
				Contacts.com
			</div>
			<div class="version">
				V1.1
			</div>
		</div>
	</div>
</div>
<div class="menu">
	
	<button class="tipo02" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">ADD NOVO CONTATO</button>
	<div id="id01" class="modal">
  		<form class="modal-content animate" method="post" action="assets/PHP/processa.php">
    	    <div class="container">
	   			<ul> 
	   				<h2 class="titulo">NOVO CONTATO</h2>   
					
					<!--
					<form id="formulario" method="POST" action="assets/PHP/processa.php">
						
						<h3>Selecione a lista onde deseja adicionar o novo contato</h3>
						
						<div class="tipoContato">
							<input class="radio" type="radio" name="tpContato" value="setor01" required="required" /> SETOR 01 
							<input class="radio" type="radio" name="tpContato" value="setor02" required="required" /> SETOR 02
							<input class="radio" type="radio" name="tpContato" value="setor03" required="required" /> SETOR 03 
							<input class="radio" type="radio" name="tpContato" value="setor04" required="required" /> SETOR 04
						</div>
						A idéia de selecionar o setor, é a de criação de listas poderia ser EX: ADM / Suprimentos / RH / MAnutenção 
							E se conseguir mostrar elas filtradas ficaria muito bom ((Mané))-->
						<li>
							<label>Nome:</label>  
							<input class="tipo01" name="nome" type="text" placeholder="Nome Completo" />
						</li>
						<li>
							<label>Setor:</label>
							 <input class="tipo01"  name="departamento" type="text" placeholder="Setor do Contato" /> 
						</li>
						<li>
							<label>Ramal:</label>
							<input class="tipo01" name="ramal" type= "tel"  maxlength="5"  title="Apenas números" placeholder="Ex: xxxxx" />
						</li>
						<li>
							<label>Celular 1:</label>
							<input class="tipo01" name="fone" type= "tel"  placeholder="Ex:xx-xxxxx-xxxx" />
						</li>
						<li>
							<label>Celular 2:</label>
							<input class="tipo01" name="celular2" type= "tel"  placeholder="Ex:xx-xxxxx-xxxx" />
						</li>
						
						<li>
							<label>E-mail</label>
							<input class="tipo01" name="email" type= "email"  placeholder="E-mail"/>
						</li>
						
							
							<input class="tipo02" name="confirmar" type="submit"  id="btnSalvar" value =" SALVAR "/>
							
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">VOLTAR</button>
				</ul>
      		</div>
  		</form>
</div>

<button class="tipo02" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">EDITAR CONTATOS</button>
	<div id="id02" class="modal">
  		<form class="modal-content animate" >
    	    <div class="container">
	   			<ul> 
	   				<h2 class="titulo">EDITAR CONTATO</h2>   
	   				<li>
						<label>Nome do Recado: </label>
							<select  name="select">
					    		<option value="valor1" selected="" >Selecione</option> 
					    		<option value="valor1">Contato 001</option> 
  								<option value="valor2">Contato 002</option>
 								<option value="valor3">Contato 003</option>
						</select>

	   				</li>
					<li>
						<label>Nome:</label>  
						<input class="tipo01" name="name" type="text"  placeholder="Nome " />
					</li>
					<li>
						<label>Setor:</label>
						 <input class="tipo01"  name="setor" type="text" placeholder="Setor" /> 
					</li>
					<li>
						<label>Ramal:</label>
						<input class="tipo01" name="ramal" type= "tel" placeholder="Ramal" />
					</li>
					<li>
						<label>Celular 1:</label>
						<input class="tipo01" name="celular1" type= "tel"  placeholder="Celular 1" />
					</li>
					<li>
						<label>Celular 2:</label>
						<input class="tipo01" name="celular2" type= "tel"  placeholder="Celular 2" />
					</li>
					
					<li>
						<label>E-mail</label>
						<input class="tipo01" name="email" type= "email"  placeholder="E-mail"/>
					</li>
					<li class="tesste">
						<button type="button" onclick="document.getElementById('id02').style.display='none'"  class="cancelbtn">CANCELAR</button>
						<input class="tipo02" name="editar" type="button" value =" SALVAR "/>
						<input class="tipo02" name="excluir" type="button" value =" EXCLUIR "/>

					</li>
				</ul>
      	</div>
  	</form>
</div>
<button class="tipo02" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">ADD NOVO RECADO</button>
	<div id="id03" class="modal">
		<form class="modal-content animate" method="POST" action="assets/PHP/gravarTexto" >
        	<div class="container">
				<ul> 
	   				<h2 class="titulo">CRIAR RECADO</h2>   
					<li>
						<label >Nome do Recado: </label>
						<input class="tipo03" name="titulo_recado" type="text"  placeholder="TITULO DO RECADO " />
					</li>
					<li>
						<textarea name="texto" rows="20" cols="82" maxlength="500"></textarea>
					</li>
					<li class="tesste">
						<button type="button" onclick="document.getElementById('id03').style.display='none'"  class="cancelbtn">VOLTAR</button>
						<input class="tipo02" name="excluir" type="submit" value =" SALVAR "/>
					</li>
				</ul>	   		
	   		</div>
  		</form>
	</div>
<button class="tipo02" onclick="document.getElementById('id04').style.display='block'" style="width:auto;">EXIBIR RECADOS</button>
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
						<textarea rows="20" cols="82" maxlength="500"></textarea>
					</li>
					<li class="tesste">
						<button type="button" onclick="document.getElementById('id04').style.display='none'"  class="cancelbtn">VOLTAR</button>
						<input class="tipo02" name="editar" type="button" value =" EDITAR "/>
						<input class="tipo02" name="excluir" type="button" value =" EXCLUIR "/>
					</li>
				</ul>
        	</div>
  		</form>
	</div>
</div>
<div class="principal">
    	<table>
     		<tr>
	   			<th>Nome	</th>
       			<th>Setor	</th>
       			<th>Ramal	</th>
       			<th>Celular	</th>
       			<th>E-mail  </th>
       		</tr>
     	</table>

		<div class="listagem">
			<table>
			<?php 
				include 'assets/PHP/pessoa.php';
				$pe = new pessoa();
				$all = $pe -> buscaUsuario();		
			
			?>
			</table>


   	
    	</div>
</div>
</body>

</html>