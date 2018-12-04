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
			<th>preco </th>
			<th>quantidade atual </th>
			<th>quantidade ideal </th>
			<th>deletar</th>
			<th>Vender</th>
			<th>alterar </th>
		</tr>

	<?php
	include ('../../procedimentos/venda/seleciona_todos_alimentacao.php'); 
	if($valor >0 )
		echo " O total de vendas de Alimentação é = R$ " . $valor;
	else
		"Não ocorreram vendas ainda...";


	?>
	</table>
	<a href="./inserirAlimentacao.php">Inserir Alimentacao</a>
</body>
</html>