<?php

require_once 'simpletest/autorun.php';
require_once '../assets/PHP/pessoa.php';
require_once '../assets/PHP/permissoes.php';
	
//teste que verifica se a busca dos usuarios não falhou
class TestLogin extends UnitTestCase{
	function testbuscaUsuario(){
		$teste = new pessoa();
		
		$this->assertTrue($teste->buscaUsuario());
	}
}

//Verifica se foi possivel localizar a permissao e se ela for de Administrador
class TestPermissao extends UnitTestCase{
	function testretornaPermissao(){
		$re = new Factory();
		$pe = $re->retornaPermissao();
		$resultado = $pe -> permissao();
		
		$this->assertEqual($resultado,'Administrador');

	}
}
?>
