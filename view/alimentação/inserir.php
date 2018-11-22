<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if($_GET['v']=='ok') 
			echo "Alimentação inserido";
	 ?>
	<form method="POST" action="../../procedimentos/alimentação/inserir.php">
		<input type="text" required="required" name="nome" id="nome" placeholder="nome"><br>
		<select name="tipo">
			  <option value="1">Herbívoros</option>
			  <option value="2"> Carnívoros</option>
			  <option value="3">Onívoros</option>
		</select><br>
		<input type="date" required="required" name="validade" id="validade" placeholder="validade"><br>
		<input type="number" required="required" name="quantidade" id="quantidade" placeholder="quantidade" ><br>
		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>