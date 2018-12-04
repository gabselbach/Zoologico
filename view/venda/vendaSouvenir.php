<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="../../procedimentos/venda/cadVendaSouvenir.php">
	<?php
	ini_set('display_errors',1);
ini_set('display_startup_erros',1); 
	if(isset($_GET['id'])){
		$id= $_GET['id'];
	include ('../../procedimentos/venda/seleciona_todos_souvenirvenda.php'); 
}
			?>
			<input type="number" required="required" name="quantidade_vendida" id="quantidade" placeholder="quantidade vendida" ><br>
			<button type="submit" name="submit" class="botao submit">Cadastrar Venda</button>
			</form>
</body>
</html>