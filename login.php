<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,user-scalable=0" />
  <link rel="stylesheet" type="text/css" href="assets/css/templatelogin.css" />
  <title>login V1.0</title> 
</head>

<body background="assets/images/01.jpg" bgproperties="fixed" style="background-repeat: no-repeat">
  
<form method="POST">
    <div class="imgcontainer">
        <img src="assets/images/avatar.png" alt="Avatar" class="avatar" >
    </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Password" name="psw" required>

    <input class="entrarbtn" type="button" name="cancelar" value="Entrar" onclick="window.open('index.php');" />

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>




