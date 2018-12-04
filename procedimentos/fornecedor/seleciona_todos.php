<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Fornecedor.class.php');
	require('../../model/Conexao.class.php');
	$a = new Fornecedor();
	$sql = $a->select();
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazLinha();
 	foreach($array as $i => $value) {
 		
 		echo "<tr><td>". $value['nome']  . "</td>
 			<td>". $value['tipo']  . "</td>
 			<td>". $value['telefone']  . "</td>
 			<td>". $value['email']  . "</td>
			<td><a href=\"../../procedimentos/fornecedor/deletar.php?id=" . $value['idFornecedor'] . "\"><img src=\"../../img/lixeira.png\"/></a></td>
			<td><a href=\"../../view/fornecedor/alterar.php?id=".$value['idFornecedor']."\"><img src=\"../../img/engre.png\"/></a></td>
 			</tr>";
 	}
	 $con->disconnect();
