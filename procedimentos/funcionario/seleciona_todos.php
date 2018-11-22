<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Funcionario.class.php');
	require('../../model/Conexao.class.php');
	$funcionario = new Funcionario();
	$sql = $funcionario->select();
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazLinha();
 	foreach($array as $i => $value) {
 		switch ($value['atribuicao']) {
					case 1:
						$a ="Tratador";
						break;
					case 2:
						$a = " Veterinario";
						break;
					case 3:
						$a =" haha";
						break;
					default:
						$a = " dffk<";
						break;
				}
 		echo "<tr><td>". $value['nome']  . "</td>
 			<td>". $a  . "</td>
 			<td>R$ ". $value['salario']  . "</td>
			<td><a href=\"../../procedimentos/funcionario/deletar.php?id=" . $value['idFuncionario'] . "\"><img src=\"../../img/lixeira.png\"/></a></td>
			<td><a href=\"../../view/funcionario/alterar.php?id=".$value['idFuncionario']."\"><img src=\"../../img/engre.png\"/></a></td>
 			</tr>";
 	}
	 $con->disconnect();
