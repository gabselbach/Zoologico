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
 			if($value['sit']==1){
 		switch ($value['atribuicao']) {
					case 1:
						$a ="Tratador";
						break;
					case 2:
						$a = " Veterinario";
						break;
					case 3:
						$a ="Estoquista";
						break;
					default:
						$a = "Vendedor";
						break;
				}
 		echo "<tr><td>". $value['nome']  . "</td>
 			<td>". $a  . "</td>
 			<td>R$ ". $value['salario']  . "</td>
 			<td>". $value['data_admissao']  . "</td>
 			<td>". $value['telefone']  . "</td>
 			<td>". $value['email']  . "</td>
 			<td>". $value['rua']  . "</td>
 			<td>". $value['cep']  . "</td>
 			<td>". $value['n']  . "</td>
			<td><a href=\"../../procedimentos/funcionario/deletar.php?id=" . $value['idFuncionario'] . "\"><img src=\"../../img/lixeira.png\"/></a></td>
			<td><a href=\"../../view/funcionario/funcionario_alt.php?id=".$value['idFuncionario']."\"><img src=\"../../img/engre.png\"/></a></td>
 			</tr>";
 		}
 	}
	 $con->disconnect();
