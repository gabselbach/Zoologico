<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
			include('../../procedimentos/venda/pedadadosSouvenir.php');
		
		}
	 ?>
	<form method="POST" action="../../procedimentos/venda/alterarSouvenir.php">
		<input type="hidden" name="id" value="<?=$id?>" >
		<input type="text" required="required" name="nome" id="nome" placeholder="nome" value="<?=$array['nome']?>"><br>
		<input type="text" required="required" name="material" id="material" placeholder="material" value="<?=$array['material']?>"><br>
		<input type="text" required="required" name="preco" id="preco" placeholder="preco" value="<?=$array['preco']?>"><br>
		<input type="number" required="required" name="quantidade" id="quantidade" placeholder="quantidade atual" value="<?=$array['quantidade_atual']?>"><br>
		<input type="number" required="required" name="qt_ideal" id="qt_ideal" placeholder="quantidade ideal" value="<?=$array['quantidade_ideal']?>" ><br>
		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>