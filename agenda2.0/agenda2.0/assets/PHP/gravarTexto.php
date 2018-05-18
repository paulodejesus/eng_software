<?php
 
if (isset($_POST['texto'])) {
   	$texto = $_POST['texto'];
 	$titulo = $_POST['titulo_recado'];

   $arquivo = fopen($titulo.'.txt', 'w');
   fwrite($arquivo, $texto);
   fclose($arquivo);
}
header("Refresh: 0; ../../telaPrincipal.php");
?>