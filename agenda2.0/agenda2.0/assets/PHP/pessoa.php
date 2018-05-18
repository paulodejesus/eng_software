<?php
	class pessoa{

		public $nome, $departamento, $celular, $ramal, $email;


		public function inserirDados(){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$departamento = filter_input(INPUT_POST, 'departamento', FILTER_SANITIZE_STRING);
			$celular = filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_STRING);
			$ramal = filter_input(INPUT_POST, 'ramal', FILTER_SANITIZE_STRING);
			$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

			$Conexao = conexao::getInstance();

			$sql = "INSERT INTO usuarios (nome, departamento, ramal, celular, email) VALUES ('$nome', '$departamento', '$celular', '$celular', '$email')";
			

			$result= mysqli_query($Conexao->getCon(), $sql);
			$resultado = mysqli_fetch_assoc($result);
		}

		function buscaUsuario(){
			require_once 'conexao.php';
			$Conexao = conexao::getInstance();
			$query = mysqli_query($Conexao->getCon(), "SELECT * FROM usuarios");
			
			while($escrever=mysqli_fetch_array($query)){
				?>			
				
				<tr>
				    <th> <?php  echo "<td>".$escrever['nome'];  ?></th>
				    <th> <?php  echo "<td>".$escrever['departamento'];  ?></th>
				    <th> <?php  echo "<td>".$escrever['ramal'];  ?></th>
				    <th> <?php  echo "<td>".$escrever['celular'];  ?></th>	
				    <th> <?php  echo "<td>".$escrever['email'];  ?></th><br/>
					


				</tr> 

				<?php
			}
			

			return mysqli_fetch_array($query);
				

		}


	}




?>