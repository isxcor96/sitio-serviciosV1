<?php session_start(); ?>
<!DOCTYPE html >
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo-login.css">
	<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
	<title>Login</title>
</head>
<body>
 <script src="jquery-3.3.1.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js" ></script>
<div class="caja-contenedor">
	<h1 class="titulo">Iniciar sesión</h1>
	<form method="POST" action="php/login1.php" name="login" method="post" >
     	<!--Usuario-->
		<label for="username">Usuario</label>
		<input type="text" placeholder="Ingresar usuario" name="txtUsu" class="group-form" id="txtUsu">
		<!--contraseña-->
		<label for="pass">Contraseña</label>
		<input type="password" placeholder="Ingresar contraseña" name="txtCon" class="group-form" id="txtCon">	
		<!--BOTON-->
		<input type="submit" id="entrar" class="group-form btn btn-success" value="Acceder">
		<!--<div class="g-recaptcha" data-sitekey="6LcSyXoUAAAAAPNgMmzbVkzCbvygVw56Ip8zrFbk"></div>-->
		<a class="forgot" href="Registro usuario.html">No tienes cuenta? Registrate aquí</a>
	</form>
</div>	
<script src="js/valida_login.js"></script>	
</body>

</html>
