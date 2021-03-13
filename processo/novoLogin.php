<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> fazendo login </title>
  <link rel="stylesheet" href="css/alesana.css">

</head>
<body>

	<div class="login-box">
	<img class="shisui" src="img/shisui.png" alt="login-user">

	<h1> Seu login</h1>
	<form method="GET" action="startSession.php">
		<!--usuário-->
	<label for="username">Usuário</label>
	<input type="text" name="usu" placeholder="Acesse seu usuário" value="BotsumaSenju">

	    <!--senha-->
	<label for="username">Senha</label>
	<input type="password" name="sen" placeholder="Acesse sua senha" value="1945">

        <!--código para crear boton-->
	<input type="submit" value="Log In">

	<a href="#"> Esqueceu a sua senha?</a><br>
	<a href="#"> Não tem conta?</a>


	</form>
  
</div>
</body>

</html>
