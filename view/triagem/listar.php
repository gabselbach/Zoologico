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

	<p>Dados sobre as triagens não podem ser apagados ou alterados,</p>
	<p> caso se tenha outros dados sobre o animal deve se criar outra triagem</p>
	<br>
	<br>
	<br>
	<a href="./inserir.php">Triagem</a>
</body>
</html>