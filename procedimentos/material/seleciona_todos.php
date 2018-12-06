<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Material.class.php');
	require('../../model/Conexao.class.php');
	$a = new Material();
	$sql = $a->select();
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazLinha();
 	$cont =0;
 	foreach($array as $i => $value) {
 		$cont++;
 		echo "<tr><td>". $value['nome']  . "</td>
 			<td>". $value['validade']  . "</td>
 			";
 			switch ($value['tipo']) {
 				case 1:
 					echo "<td>Material de Escritorio</td>";
 					break;
 				case 2:
 					echo "<td>Medicamentos e Materiais Veterinarios </td>";
 					break;
 				case 3:
 					echo "<td>Insumos</td>";
 					break;
 					
 				default:
 					break;
 			}
			 echo "
			  <td>". $value['preco']  . "</td>
			 <td>". $value['quantidade_atual']  . "</td>
			  <td>". $value['quantidade_ideal']  . "</td>
			<td><a href=\"../../procedimentos/material/deletar.php?id=" . $value['cod'] . "\"><img src=\"../../img/lixeira.png\"/></a></td>
			<td><a href=\"../../view/material/material_alt.php?id=".$value['cod']."\"><img src=\"../../img/engre.png\"/></a></td>
 			</tr>";
 	}
 	if($cont==0){
 		echo "não existe material cadastrado";
 	}

	 $con->disconnect();
