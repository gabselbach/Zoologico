<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include ('../../procedimentos/venda/seleciona_todos_ingresso.php');
	if($valor >0 )
		echo " O total de vendas de Alimentação é = R$ " . $valor;
	else
		"Não ocorreram vendas ainda...";
	?>
	<a href="../../procedimentos/venda/inserirIngresso.php">Cadastrar Ingresso</a>
</body>
</html>