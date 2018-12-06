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
			require_once('../../procedimentos/material/pegadados.php');
	 ?>
	<form method="POST" action="../../procedimentos/material/alterar.php">
		<input type="hidden" name="id" value="<?=$id?>" >
		<input type="text" required="required" name="nome" id="nome"
		value="<?=$array['nome']?>"><br>
		<input type="text" required="required" name="preco" id="preco" placeholder="preco" value="<?=$array['preco']?>"><br>

		<input type="number" required="required" name="quant_atual" id="quantidade"  value="<?=$array['quantidade_atual']?>"><br>
		<input type="number" required="required" name="quant_ideal" id="quantidade"  value="<?=$array['quantidade_ideal']?>"><br>


		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>