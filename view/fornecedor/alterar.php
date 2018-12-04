<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
			include('../../procedimentos/fornecedor/pegadados.php');
	 ?>
	<form method="POST" action="../../procedimentos/fornecedor/alterar.php">
			<input type="hidden" name="id" value="<?=$id?>" >
		<input type="text" required="required" name="nome" id="nome" placeholder="nome" value="<?=$array['nome']?>"><br>
		<input type="text" required="required" name="telefone" id="telefone" placeholder="telefone" value="<?=$array['telefone']?>" ><br>
			<input type="text" required="required" name="tipo" id="tipo" placeholder="tipo" value="<?=$array['tipo']?>" ><br>
		<input type="email" required="required" name="email" id="email" placeholder="email" value="<?=$array['email']?>" >
		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>