<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,user-scalable=0" />
	<link rel="stylesheet" type="text/css" href="assets/css/template.css" />
	<script type="text/javascript" src="assets/js/script.js"></script>

	<title>WebList V1.0</title>
</head background="assets/images/11.jpg" bgproperties="fixed" style="background-repeat: no-repeat">
<div class="userlog">
	<div class="log">
		Logged in as:
	</div>
	<div class="user">
		Admin
		<!--Pegar usuario da tela de login e jogar aqui-->
	</div>
</div>
<header > 
	<div class="container">
		<div class="pagetitle">
			<div class="title">
				Contacts.com
			</div>
			<div class="version">
				V1.0
			</div>
		</div>
	</div>
</header>

<body >
	<div id="cad" class="newcontact">
		<div class="menu">
			<input class="botao" type="button" value="Add Contact" id="receita1">
			<input class="busca"type="search" name="busca" placeholder="search for contact..."/>
	
		</div>	
		<div id="1" class="escondida"> 
			<form id="formulario" method="post">
		
				<label>Name:</label>
				<input class="insert" type="text" name="nome" id="nome_id" required >

				<label>Sector:</label>
				<input class="insert" type="text" name="dep" id="dep_id" required>

				<label>Cell Phone:</label>
				<input class="insert" type="tel" name="fone" id="fone_id" required><br>

				<label>Ramal:</label>
				<input class="insert" type="tel" name="ramal" id="ramal_id">
							
				<label>E-mail:</label>
				<input class="insert" type="email" name="email" id="email_id" > 
				<input class="salvar" type="submit" name="enviar" id="enviar_id" value="Salvar" >
			</form>
		</div>
	</div>
	<div class="principal">
    	<table>
     		<tr>
	   			<th>Name</th>
       			<th>Sector</th>
       			<th>Ramal</th>
       			<th>Cell Phone</th>
       			<th>E-mail</th>
       		</tr>
     	</table>
   		<div class="listagem">
   			<!--Aqui deverão ser adicionados os contatos-->
    	</div>
 	</div>
 	<div class="menu2">
		<input class="botao" type="button" value="Imprimir lista" >
	</div>	
</body>
<footer>
	<div class="base">
		Developed by S.S. Small Solutions
	</div>
</footer>
</html>

