<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Triagem.class.php');
	require('../../model/Conexao.class.php');
	$t = new Triagem();
	$sql = $t->select();
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazLinha();
 	foreach ($array as $key => $value) {

 		echo "<tr><td>" . $value['nome_popular'] . "</td>
 		<td>" . $value['nome']. "</td>
 		<td>" .  $value['observacoes']. "</td>
		<td>" . $value['prescricao']. "</td>
		<td>" . $value['diagnostico']. "</td>";
		if($value['status']==1)
			echo "<td>Sim</td>";
		else
			echo "<td>Não</td>"; 	
		echo"
		<td>" . $value['data'] . "</td>
		<td>" . $value['hora']. "</td>
 		</tr>";
 	}
	 $con->disconnect();
