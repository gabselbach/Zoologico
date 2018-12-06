<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Ingresso.class.php');
	$a = new Ingresso();
	$sql = $a->select();
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazLinha();
 	$sql = $a->selectVendidos();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$duo = $con->fazLinha();
 	echo "
	<table border=\"1px solid\">
		<tr>
			<th>Codigo </th>
			<th>Vender</th>
			<th>Data Venda</th>
		</tr>

 	";
 	$sql = $a->selectTotal();
 	$con->setQuery($sql);
 	$con->executeQuery();
 	$v = $con->Linha();
 	$valor = $v['valores'];
 	$cont =0;
 	foreach($array as $i => $value) {
 		if($value['sit']==1){
 			$cont++;
 		echo "<tr><td>". $value['cod']  . "</td>";
 		if($value['situacao']==0){
 			echo "<td><button style=\" width:100%;\" type=\"button\" class=\"btn btn-secondary\"><a href=\"../../procedimentos/venda/cadVendaIngresso.php?id=" . $value['cod'] . "\"/>   Vender   </a></button></td>
 			<td>Não Vendido</td></tr>";
 		}else{
 			echo"<td><button type=\"button\" class=\"btn btn-success\">Vendido</button></td>";
 			foreach($duo as $i => $t) {
 				if($t['cod'] == $value['cod'])
 					echo"<td>" . $t['data_hora'] . "</td";
 			}
 			echo "</tr>";	
 		}
 		}

 	}
 	echo "</table>";
 	if($cont==0){
 		echo " Não existe produto desse tipo cadastrado";
 	}

	 $con->disconnect();
