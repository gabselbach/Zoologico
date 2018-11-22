<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if($_GET['v']=='ok') 
			echo "Animal inserido";
	 ?>
	<form method="POST" action="../../procedimentos/animal/inserir.php">
		<input type="text" required="required" name="nome_popular" id="nome_popular" placeholder="nome_popular"><br>
		<input type="text" required="required" name="nome_cientifico" id="nome_cientifico" placeholder="nome_cientifico"><br>
		
		<input type="text" required="required" name="peso" id="peso" placeholder="peso"><br>

		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>