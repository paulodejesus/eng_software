<?php
	session_start();
	include_once("conexao.php");
	include_once("pessoa.php");

	$re = new pessoa();
	$resultado = $re->inserirDados();
	 header("Location: ../../telaPrincipal.php");

/*
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$departamento = filter_input(INPUT_POST, 'departamento', FILTER_SANITIZE_STRING);
	$celular = filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_STRING);
	$ramal = filter_input(INPUT_POST, 'ramal', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


	$result_usuario = "INSERT INTO usuarios (nome, departamento, ramal, celular, email) VALUES ('$nome', '$departamento', '$celular', '$celular', '$email')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);

	*/
?>
<script>
 
	alert('Dados gravados com sucesso') ;

 
</script>

