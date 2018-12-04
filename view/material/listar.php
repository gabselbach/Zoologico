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
			<th>Preco</th>
			<th>quantidade atual </th>
			<th>quantidade ideal </th>
			<th>deletar</th>
			<th>alterar </th>
			<th>Associar Fornecedor</th>
		</tr>

	<?php 
	include ('../../procedimentos/material/seleciona_todos.php'); 
	?>
	</table>
	<a href="./inserir.php">Inserir Material</a>
	<a href="./fornecedor.php">Associar Fornecedor</a>
</body>
</html>