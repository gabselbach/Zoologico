<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Animal.class.php');
	require('../../model/Conexao.class.php');
	$a = new Animal();
	$sql = $a->select();
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazLinha();
 	foreach($array as $i => $value) {
 		
 		echo "<tr><td>". $value['nome_popular']  . "</td>
 			<td>". $value['nome_cientifico']  . "</td>
 			<td>". $value['peso']  . "</td>
			<td><a href=\"../../procedimentos/animal/deletar.php?id=" . $value['idAnimal'] . "\"><img src=\"../../img/lixeira.png\"/></a></td>
			<td><a href=\"../../view/animal/alterar.php?id=".$value['idAnimal']."\"><img src=\"../../img/engre.png\"/></a></td>
 			</tr>";
 	}
	 $con->disconnect();
