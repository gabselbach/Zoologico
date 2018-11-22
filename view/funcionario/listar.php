<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1px solid">
		<tr>
			<th>Nome</th>
			<th>Atribuição</th>
			<th>salario</th>
			<th>deletar</th>
			<th>alterar</th>
		</tr>

	<?php 
	include ('../../procedimentos/funcionario/seleciona_todos.php'); 
	?>
	</table>
	<a href="./inserir.php">Inserir Funcionario</a>
</body>
</html>