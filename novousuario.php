<?php
require_once 'db_connect.php';
session_start();

if(isset($_POST['btn_logar'])){
	$senha = md5($_POST['senha']); 
	$sql="INSERT INTO usuarios (Nome, login, senha) values ('".$_POST['nome']."','".$_POST['usuario']."','".$senha."')";
		mysqli_query($connect, $sql);
		header('Location: paineladministrativo.php');
}

$connect->close();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Novo Usuario</title>
</head>
<body>
	<nav class="navbar navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="paineladministrativo.php">Filmes</a>
	</nav> 
	<div class="container" style="width: 50%; padding-bottom: 30px;padding-top: 68px;">
		<?php
		if (isset($erro)) {
			echo "<div class=\"alert alert-danger\" role=\"alert\">
			".$erro."
			</div>	";
		}


		?>
		<form action="novousuario.php" method="POST">
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" id="nome" name="nome" required>
			</div>
			<div class="form-group">
				<label for="usuario">Usuario</label>
				<input type="text" class="form-control" id="usuario" name="usuario" required>
			</div>
			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="password" class="form-control" id="senha", name="senha" required>
			</div>
			<button type="submit" class="btn btn-primary" name="btn_logar">Submit</button>
		</form>
	</div>
</body>
</html>