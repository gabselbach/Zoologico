<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="../../procedimentos/material/inserir.php">
		<input type="text" required="required" name="nome" id="nome" placeholder="nome"><br>
		<select name="tipo">
			  <option value="1">Material de Escritorio</option>
			  <option value="2">Medicamentos e Materiais Veterinarios </option>
			  <option value="3">Insumos</option>
		</select><br>
		<input type="date" required="required" name="validade" id="validade" placeholder="validade"><br>
		<input type="number" required="required" name="quant_atual" id="quantidade" placeholder="quantidade atual" ><br>
		<input type="number" required="required" name="quant_ideal" id="nome" placeholder="quantidade ideal"><br>
		<input type="text" required="required" name="preco" id="preco" placeholder="preco"><br>
		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>