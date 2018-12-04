<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
			include('../../procedimentos/venda/pegadadosAlimentacao.php');
	 ?>
	<form method="POST" action="../../procedimentos/venda/alterarAlimentacao.php">
		<input type="hidden" name="id" value="<?=$id?>" >
		<input type="text" required="required" name="nome" id="nome" placeholder="nome" value="<?=$array['nome']?>"><br>
		<input type="text" required="required" name="preco" id="preco" placeholder="preco" value="<?=$array['preco']?>"><br>
		<input type="number" required="required" name="quantidade" id="quantidade" placeholder="quantidade atual" value="<?=$array['quantidade_atual']?>"><br>
		<input type="number" required="required" name="qt_ideal" id="qt_ideal" placeholder="quantidade ideal" value="<?=$array['quantidade_ideal']?>" ><br>
		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>