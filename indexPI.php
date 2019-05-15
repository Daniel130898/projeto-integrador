<?php
session_start();

?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
     <link href="style.css" rel="stylesheet" type="text/css">
		<title> Sistema de Manutenção </title>
		<meta charset="utf-8">
	</head>

	<body>
<form method="POST" action="validandologin.php">

<strong>E-mail:</strong><br>
<input type="email" name="email" placeholder="Digite seu e-mail" required><br><br>

<strong>Senha:</strong><br>
<input type="password" name="senha" placeholder="Digite sua senha" required><br><br>

<input type="submit" name="botao" value="Entrar">

  </form>
	<p class="text-center text-danger">
	<?php if(isset($_SESSION['loginErro'])) {
		  echo $_SESSION['loginErro'];
			unset ($_SESSION['loginErro']);
	} ?>

	</body>

</html>
