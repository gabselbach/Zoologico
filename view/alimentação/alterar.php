<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
			include('../../procedimentos/animal/pegadados.php');
	 ?>
	<form method="POST" action="../../procedimentos/alimentação/alterar.php">
		<input type="hidden" name="id" value="<?=$id?>" >
		<input type="text" required="required" name="nome" id="nome"
		value="<?=$array['nome']?>"><br>
		<input type="date" required="required" name="validade" id="validade"
		value="<?=$array['validade']?>"><br>
	
		<input type="number" required="required" name="quantidade" id="quantidade"  value="<?=$array['quantidade']?>"><br>

		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>