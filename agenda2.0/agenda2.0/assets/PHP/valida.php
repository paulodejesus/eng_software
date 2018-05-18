<?php
	session_start();	
	include_once("conexao.php");
	include_once('retornos.php');
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		
		$re = new retornos();
		$resultado = $re->confereLogin();
		$permissao = $resultado['permissao'];


		if(empty($resultado)){
			$_SESSION['loginErro'] = "Usuario ou senha invalido";			
			
			header("Location: ../../login.php");
			
		}elseif(isset($resultado)){
			
				header("Location: ../../telaPrincipal.php");
				$_SESSION['loginOk'] = "OK";
		}else{
			$_SESSION['loginErro'] = "Usuario ou senha invalido";
			header("Location: ../../login.php");
		}
		
	}else{
		$_SESSION['loginErro'] = "Usuario ou senha invalido";
		header("Location: ../../login.php");
	}



?>