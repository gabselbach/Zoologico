<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1px solid">
		<tr>
			<th>Nome </th>
			<th>Validade</th>
			<th>Tipo</th>
			<th>quantidade </th>
			<th>deletar</th>
			<th>alterar </th>
		</tr>

	<?php 
	include ('../../procedimentos/animal/alimentacao/seleciona_todos.php'); 
	?>
	</table>
	<a href="./inserir.php">Inserir Alimentação</a>
</body>
</html>