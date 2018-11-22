<!DOCTYPE html>
<html>
<head>
	<title>Triagem</title>
</head>
<body>
	<form method="POST" action="../../procedimentos/triagem/inserir.php">
	<h1>triagem</h1>
	<?php 
	$flag=1;
	if($_GET['v']=='ok') 
			echo "triagem inserida inserido";
	 ?>
	 <!-- select para o  funcionario e para o animal -->
	 <label>Funcionario:</label>
	 	<select name="funcionario">
			 <?php include('../../procedimentos/funcionario/seleciona_campo.php');?>
		</select><br>
		<label>Animal:</label>
	 	<select name="animal">
			 <?php include('../../procedimentos/animal/seleciona_campo.php');?>
		</select><br>
		<input type="text" required="required" name="observações" id="observações" placeholder="observações"><br>
		
		<textarea type="textarea" required="required" name="prescricao" id="prescrição" placeholder="Caso o animal precise de uma prescrição de exames, remedios, internação"></textarea><br>
		<input type="date" required="required" name="data" id="data" placeholder="data" >
		<input type="time" required="required" name="hora" id="hora" ><br>
		<textarea type="tex" placeholder="diagnostico" required="required" name="diagnostico" id="diagnostico"></textarea><br>
		<select name="status">
			  <option value="1">Liberado</option>
			  <option value="2"> Em tratamento</option>
		</select><br>

		<button type="submit" name="submit" class="botao submit">Enviar</button>
	</form>
</body>
</html>