<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
			include('../../procedimentos/funcionario/pegadados.php');
	 ?>
	<form method="POST" action="../../procedimentos/funcionario/alterar.php">
		<input type="hidden" name="id" value="<?=$id?>" >
		<input type="text" required="required" name="nome" id="nome" placeholder="nome"
		value="<?=$array['nome']?>"><br>
		<select name="atribuição">
			  <option value="1">tratador</option>
			  <option value="2">veterinario</option>
			  <option value="3">estoquista</option>
			  <option value="4">Vendedor</option>
		</select><br>
		<input type="text" required="required" name="salario" id="salario" placeholder="salario" value="<?=$array['salario']?>"><br>
		<input type="date" required="required" name="data_admissao" id="data_admissão" placeholder="data admissão" value="<?=$array['data_admissao']?>" ><br>
			<input type="text" required="required" name="telefone" id="telefone" placeholder="telefone" value="<?=$array['telefone']?>"><br>
				<input type="email" required="required" name="email" id="email" value="<?=$array['email']?>" placeholder="email" >
		<input type="number" placeholder="nº" required="required" name="n" id="n" value="<?=$array['n']?>">
		<input type="text" required="required" name="rua" id="rua" placeholder="rua" value="<?=$array['rua']?>">
		<input type="text" required="required" name="cep" id="cep" placeholder="cep" value="<?=$array['cep']?>" >

		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>