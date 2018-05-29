<?php
 
if (isset($_POST['texto'])) {
   	$texto = $_POST['texto'];
 	$titulo = $_POST['titulo_recado'];

   $arquivo = fopen($titulo.'.txt', 'w');
   fwrite($arquivo, $texto);
   fclose($arquivo);
}
header("Refresh: 0; ../../telaPrincipal.php");

class Recado{
	public function lerRecado(){
	// Abre o Arquvio no Modo r (para leitura)

	  $arquivo = fopen ("texto.txt", "r");
		
	  // Lê o conteúdo do arquivo 
	  while(!feof($arquivo)){
	   //Mostra uma linha do arquivo
	   $linha = fgets($arquivo, 4096);
	   echo $linha.'<br/>';
	  }

	  // Fecha arquivo aberto
	  fclose($arquivo);
	}
	
}
?>