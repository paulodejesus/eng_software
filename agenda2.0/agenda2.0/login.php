<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,user-scalable=0" />
  <link rel="stylesheet" type="text/css" href="assets/style/templatelogin.css" />
  <title>login V1.0</title> 
</head>

<body background="assets/images/01.jpg" bgproperties="fixed" style="background-repeat: no-repeat">
  
	<form method="POST" action="assets/PHP/valida.php">
		<div class="imgcontainer">
			<img src="assets/images/avatar.png" alt="Avatar" class="avatar" >
		</div>

	  <div class="container">
		<label for="uname"><b>Username</b></label>
		<input type="text" placeholder="Username" name="email" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Password" name="senha" required>
		<input type="submit" name="Entrar" value="Entrar">
		<input type="button" name="cancelar"  />

		<label>
		  <input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
	  </div>
	  <p class="text-center text danger">
			<?php 
			session_start();
			if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}			
			?>	  
	  </p>

	  <div class="container" style="background-color:#f1f1f1">
		<button type="button" class="cancelbtn">Cancel</button>
		<span class="psw">Forgot <a href="#">password?</a></span>
	  </div>
	</form>
</body>
</html>




