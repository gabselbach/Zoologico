<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Alimentação_Animal.class.php');
	require('../../model/Conexao.class.php');
	$a = new Alimentação_Animal();
	$sql = $a->select();
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazLinha();
 	foreach($array as $i => $value) {
 			if($value['sit']==1){
 		echo "<tr><td>". $value['nome']  . "</td>
 			<td>". $value['validade']  . "</td>
 			";
 			switch ($value['tipo']) {
 				case 1:
 					echo "<td>Herbívoros</td>";
 					break;
 				case 2:
 					echo "<td>Carnívoros</td>";
 					break;
 				case 3:
 					echo "<td>Onívoros</td>";
 					break;
 					
 				default:
 					break;
 			}
			 echo "
			 <td>". $value['quantidade']  . "</td>
			<td><a href=\"../../procedimentos/alimentação/deletar.php?id=" . $value['idAlimentacao_Animal'] . "\"><img src=\"../../img/lixeira.png\"/></a></td>
			<td><a href=\"../../view/alimentação/alimentacao_alt.php?id=".$value['idAlimentacao_Animal']."\"><img src=\"../../img/engre.png\"/></a></td>
 			</tr>";
 		}
 	}
	 $con->disconnect();
