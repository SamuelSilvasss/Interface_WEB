<!DOCTYPE html>
<html>
<head>
	<title>Erro ao tentar o login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		.message {
			background-color: #ff8080;
			color: white;
			padding: 20px;
			border-radius: 5px;
			margin: 0 auto;
			max-width: 500px;
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<h1>Erro ao tentar o login</h1>
	<div class="message">
		<p>Nome de usuário ou senha incorreta. Tente novamente, por favor.</p>
	</div>
</body>
</html>

<?php

$usuariosCadastrados = array(
    array('username' => 'Samuca1', 'password' => 'paçoca123'),
);

function verificarRegistro($username, $password, $usuariosCadastrados) {
    foreach ($usuariosCadastrados as $usuario) {
        if ($usuario['username'] === $username && $usuario['password'] === $password) {
            return true;
        }
    }
    return false;
}

//valores do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar ao Registro
if (verificarRegistro($username, $password, $usuariosCadastrados)) {
    // Registro correto, vai redirecionar para a página de acesso
    header('Location: votar.php');
    exit;
}