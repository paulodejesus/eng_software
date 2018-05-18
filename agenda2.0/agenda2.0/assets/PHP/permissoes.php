<?php
session_start();	
//desgin pattern Strategy
interface tipoPermissao{
	public function permissao();
}

class Administrador implements tipoPermissao{
	public function permissao(){		
		$_SESSION['variavel'] = 'Administrador';
		return 'Administrador';
	}		//Sera implementado o que o este usuario tem permissao
}
class Secretaria implements tipoPermissao{
	public function permissao(){
		$_SESSION['variavel'] = 'Secretaria';
		return 'Secretaria';
	}
}
class Outro implements tipoPermissao{
	public function permissao(){
		$_SESSION['variavel'] = 'Outro';
		return 'Outro';
	}
}
//desgin pattern Factory
class Factory{
	public function retornaPermissao(){
		$permissao = $_SESSION['variavel'];
		if($permissao == '0'){
			$pe = new Administrador();
			$re = $pe -> permissao();
			return $re;
		}elseif($permissao == '1'){
			$pe = new Secretaria();
			$re = $pe -> permissao();				
			return $re;
		}else{
			$pe = new Outro();
			$re = $pe -> permissao();				
			return $re;
		}
	}

}



?>