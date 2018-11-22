<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1px solid">
		<tr>
			<th>Nome Popular</th>
			<th>Nome Cientifico</th>
			<th>deletar</th>
			<th>alterar</th>
		</tr>

	<?php 
	include ('../../procedimentos/animal/seleciona_todos.php'); 
	?>
	</table>
	<a href="./inserir.php">Inserir Animal</a>
</body>
</html>