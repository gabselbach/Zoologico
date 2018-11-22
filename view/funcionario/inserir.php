<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if($_GET['v']=='ok') 
			echo "funcionario inserido";
	 ?>
	<form method="POST" action="../../procedimentos/funcionario/inserir.php">
		<input type="text" required="required" name="nome" id="nome" placeholder="nome"><br>
		<select name="atribuição">
			  <option value="1">tratador</option>
			  <option value="2">veterinario</option>
			  <option value="3">estoquista</option>
			  <option value="4">Vendedor</option>
		</select><br>
		<input type="text" required="required" name="salario" id="salario" placeholder="salario"><br>
		<input type="date" required="required" name="data_admissao" id="data_admissão" placeholder="data admissõo" ><br>
			<input type="text" required="required" name="telefone" id="telefone" placeholder="telefone" ><br>
				<input type="email" required="required" name="email" id="email" placeholder="email" >
		<input type="number" placeholder="n" required="required" name="n" id="n">
		<input type="text" required="required" name="rua" id="rua" placeholder="rua" >
		<input type="text" required="required" name="cep" id="cep" placeholder="cep" >

		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>