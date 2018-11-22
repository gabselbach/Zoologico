<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1px solid">
		<tr>
			<th>Animal</th>
			<th>Funcionario Responsavel</th>
			<th>Observações</th>
			<th>Prescrição</th>
			<th>Diagnostico</th>
			<th>Em tratamento:</th>
			<th>data</th>
			<th>hora</th>
		</tr>

	<?php 
	include ('../../procedimentos/triagem/seleciona_todos.php'); 
	?>
	</table>
	<a href="./inserir.php">Triagem</a>
</body>
</html>