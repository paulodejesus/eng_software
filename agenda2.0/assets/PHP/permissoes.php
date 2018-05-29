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

class Secretaria implements tipoPermissao{
	public function permissao(){
		$_SESSION['variavel'] = '1';
		return 'Secretaria';
	}
}

class Outro implements tipoPermissao{
	public function permissao(){
		$_SESSION['variavel'] = '2';
		return 'Outro';
	}
}

//desgin pattern Factory
class Factory{
	public function retornaPermissao(){
		$permissao = $_SESSION['variavel'];
		if($permissao == '0'){
			$pe = new Administrador();
			//$re = $pe -> permissao();
			return $pe;
		}elseif($permissao == '1'){
			$pe = new Secretaria();
			//$re = $pe -> permissao();				
			return $pe;
		}elseif($permissao == '2'){
			
			$pe = new Outro();
			//$re = $pe -> permissao();				

			return $pe;
		}
	}

}



?>