<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="../../procedimentos/venda/inserirAlimentacao.php">
		<input type="text" required="required" name="nome" id="nome" placeholder="nome"><br>
		<input type="text" required="required" name="preco" id="preco" placeholder="preco"><br>
		<select name="tipo">
			  <option value="Normal">Normal</option>
			  <option value="vegetariana"> vegetariana</option>
			  <option value="bebida">bebida</option>
		</select><br>
		<input type="date" required="required" name="validade" id="validade" placeholder="validade"><br>
		<input type="number" required="required" name="quantidade" id="quantidade" placeholder="quantidade atual" ><br>
		<input type="number" required="required" name="qt_ideal" id="qt_ideal" placeholder="quantidade ideal" ><br>
		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>