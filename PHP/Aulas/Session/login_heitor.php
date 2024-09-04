<?php
if(isset($_POST['entrar'])){
	$email = "email@email.com";
	$senha = 123456;

	$hash = password_hash($senha, PASSWORD_ARGON2ID);

	$getemail = $_POST['email'];
	$getsenha = $_POST['senha'];

	if(password_verify($getsenha, $hash)){
		echo "Senha ok<br>";
		echo "hash: $hash";
	}//else {
		//header("location: cad.php");
	//}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form method="post" action="">
		<input type="email" name="email" id="email" placeholder="Digite seu email"><br>
		<input type="password" name="senha" id="senha" placeholder="********"><br>
	<?php if(isset($_GET['login']) == 'erro'):?>
		<div class="texto_erro">Email ou senha inválido(s).</div>
	<?php endif; ?>
		<input type="submit" value="Entrar" name="entrar">
	</form>
</body>
</html>