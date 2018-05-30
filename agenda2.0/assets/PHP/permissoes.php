<?php
session_start();	
//desgin pattern Strategy
interface tipoPermissao{
	public function permissao();
}

class Administrador implements tipoPermissao{
	public function permissao(){		
		$_SESSION['variavel'] = '0';
		return 'Administrador';
	}	
	//Sera implementado o que o este usuario tem permissao
}

class Usuario implements tipoPermissao{
	public function permissao(){
		$_SESSION['variavel'] = '1';
		return 'Usuario';
	}
}
//desgin pattern Factory
class Factory{
	public function retornaPermissao(){
		$permissao = $_SESSION['variavel'];
		if($permissao == '0'){
			$pe = new Administrador();			
			return $pe;
		}elseif($permissao == '1'){
			$pe = new Usuario();			
			return $pe;
		}
	}

}



?>
