<?php
	session_start();	
	include_once("conexao.php");
	

	class retornos{
		
		public function confereLogin(){
			
			$Conexao = conexao::getInstance(); //instancia a classe conexão com o design pattern Singleton
			$usuario =  $_POST['email']; 
			$senha =  $_POST['senha'];			
			
			$sql = "SELECT * FROM cadastros WHERE email = '$usuario' && senha = '$senha'";
			$result= mysqli_query($Conexao->getCon(), $sql);
			$resultado = mysqli_fetch_assoc($result);
			$permissao = $resultado['permissao'];
			$_SESSION['variavel'] = $permissao;
			
			return $resultado;
		}
		

	}

?>