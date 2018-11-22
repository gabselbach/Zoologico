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
 	$array = $con->Linha();
 		echo "<tr><td>" . $array['nome_popular'] . "</td>
 		<td>" . $array['nome']. "</td>
 		<td>" .  $array['observacoes']. "</td>
		<td>" . $array['prescricao']. "</td>
		<td>" . $array['diagnostico']. "</td>";
		if($array['status']==1)
			echo "<td>Sim</td>";
		else
			echo "<td>Não</td>"; 	
		echo"
		<td>" . $array['data'] . "</td>
		<td>" . $array['hora']. "</td>
 		</tr>";
	 $con->disconnect();
