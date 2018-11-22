<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>Nome</tr>
		<tr>Atribuição</tr>
		<tr>salario</tr>
	<?php 
	ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	include ('../../procedimentos/funcionario/seleciona_todos.php'); 
			while($linha){

				$funcionario->atribuiDados($linha);
				echo "<td>". $funcionario->getNome() ."</td>";
				switch ($funcionario->getAtribuição()) {
					case 1:
						echo "<td> Tratador</td>";
						break;
					case 2:
						echo "<td> Veterinario</td>";
						break;
					case 3:
						echo "<td> haha</td>";
						break;
					default:
						echo "<td> dffk</td>";
						break;
				}
				echo "<td>". $funcionario->getSalario() ."</td>";	
			}
	?>
	</table>
</body>
</html>