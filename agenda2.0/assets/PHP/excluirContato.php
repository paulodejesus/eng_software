<?php
	$id = filter_input(INPUT_GET, "id");
	$nome = filter_input(INPUT_GET, "nome");
	$departamento = filter_input(INPUT_GET, "departamento");
	$ramal = filter_input(INPUT_GET, "ramal");
	$celular = filter_input(INPUT_GET, "celular");
	$email = filter_input(INPUT_GET, "email");

	include_once 'conexao.php';
	$Conexao = conexao::getInstance();

	$sql = "delete from usuarios where id='$id';";
	$result= mysqli_query($Conexao->getCon(), $sql);

	if($result){
		header("Location: ../../telaPrincipal.php");		
	}else{
		die("erro" . mysqli_error($Conexao));
	}
?>