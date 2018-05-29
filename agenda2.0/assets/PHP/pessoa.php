<link rel="stylesheet" type="text/css" href="assets/style/css.css"/>
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

			$sql = "INSERT INTO usuarios (nome, departamento, ramal, celular, email) VALUES ('$nome', '$departamento', '$ramal', '$celular', '$email')";
			

			$result= mysqli_query($Conexao->getCon(), $sql);
			$resultado = mysqli_fetch_assoc($result);
		}

		function buscaUsuario(){
			require_once 'conexao.php';
			$Conexao = conexao::getInstance();
			$query = mysqli_query($Conexao->getCon(), "SELECT * FROM usuarios ORDER BY nome asc");
			$permissao = $_SESSION['variavel'];
			
			if ($query != null) {	
				while($escrever=mysqli_fetch_array($query)){
					?>			
		
					
					<tr class="tabela">
						<th class="t1"><?php  echo "".$escrever['nome'];  ?></th>
					    <th class="t2"><?php  echo "".$escrever['departamento'];  ?></th>
					    <th class="t3"><?php  echo "".$escrever['ramal'];  ?></th>
					    <th class="t4"><?php  echo "".$escrever['celular'];  ?></th>	
					    <th class="t5"><?php  echo "".$escrever['email'];  ?></th>
						
					
					    <th class="t6">
					    	
					    		<a href="<?php echo "../../../agenda2.0/assets/telas/paginaAlterar.php?id=" . $escrever['id'] . "&nome=" . $escrever['nome'] . "&departamento=" . $escrever['departamento'] . "&ramal=" . $escrever['ramal'] . "&celular=" . $escrever['celular'] . "&email=" . $escrever['email'];?>"><img src="assets/images/icons/edit.png">
						    	</a>
					    	
					    </th>
					
						<th class="t6">
								<a href="<?php echo "../../../agenda2.0/assets/telas/paginaExcluir.php?id=" . $escrever['id'] . "&nome=" . $escrever['nome'] . "&departamento=" . $escrever['departamento'] . "&ramal=" . $escrever['ramal'] . "&celular=" . $escrever['celular'] . "&email=" . $escrever['email'];?>"><img src="assets/images/icons/delete.png">
								</a>
							
						</th>
						

					</tr> 

					<?php
					
			}				
				return true;	//se não contem erros no comando sql
			}else{
				return false;
			}
			
		}


			function buscaUltimosUsuarios(){
			require_once 'conexao.php';
			$Conexao = conexao::getInstance();
			$query = mysqli_query($Conexao->getCon(), "SELECT * FROM usuarios ORDER BY id desc");
			$permissao = $_SESSION['variavel'];
			
			while($escrever=mysqli_fetch_array($query)){
				?>			
		
				
				<tr class="tabela">
					<th class="t1"><?php  echo "".$escrever['nome'];  ?></th>
				    <th class="t2"><?php  echo "".$escrever['departamento'];  ?></th>
				    <th class="t3"><?php  echo "".$escrever['ramal'];  ?></th>
				    <th class="t4"><?php  echo "".$escrever['celular'];  ?></th>	
				    <th class="t5"><?php  echo "".$escrever['email'];  ?></th>
					
				
				    <th class="t6">
				    	
				    		<a href="<?php echo "../../../agenda2.0/assets/telas/paginaAlterar.php?id=" . $escrever['id'] . "&nome=" . $escrever['nome'] . "&departamento=" . $escrever['departamento'] . "&ramal=" . $escrever['ramal'] . "&celular=" . $escrever['celular'] . "&email=" . $escrever['email'];?>"><img src="assets/images/icons/edit.png">
					    	</a>
				    	
				    </th>
				
					<th class="t6">
							<a href="<?php echo "../../../agenda2.0/assets/telas/paginaExcluir.php?id=" . $escrever['id'] . "&nome=" . $escrever['nome'] . "&departamento=" . $escrever['departamento'] . "&ramal=" . $escrever['ramal'] . "&celular=" . $escrever['celular'] . "&email=" . $escrever['email'];?>"><img src="assets/images/icons/delete.png">
							</a>
						
					</th>
					

				</tr> 

				<?php
				
			}
			return mysqli_fetch_array($query);
		}




		function buscaSelect(){
				
			require_once 'conexao.php';
			$Conexao = conexao::getInstance();
			$consulta = mysqli_query($Conexao->getCon(), "SELECT * FROM usuarios");
			
			//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
			while ($dados = mysqli_fetch_array($consulta)) {
				echo("<option value='".$dados['id']."'>".$dados['nome']."</option>");
			}
				
		}


	}

?>