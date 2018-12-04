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
			include('../../procedimentos/animal/pegadados.php');
	 ?>
	<form method="POST" action="../../procedimentos/animal/alterar.php">
		<input type="hidden" name="id" value="<?=$id?>" >
		<input type="text" required="required" name="nome_popular" id="nome"
		value="<?=$array['nome_popular']?>"><br>
		<input type="text" required="required" name="nome_cientifico" id="nome"
		value="<?=$array['nome_cientifico']?>"><br>
	
		<input type="text" required="required" name="peso" id="peso"  value="<?=$array['peso']?>"><br>

		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>