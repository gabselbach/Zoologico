<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Souvenir.class.php');
	require('../../model/Conexao.class.php');
	$a = new Souvenir($id);
	$sql = $a->selectSouvenir();
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazlinha();
 	echo"	<input type=\"hidden\" name=\"id\" value=\"$id\" >";
 	foreach($array as $i => $value) {
 		echo "
		
			<p>" . $value['nome'] ."</p>
			<p>".$value['preco']."</p>
			<input type=\"hidden\" name=\"preco\" value=\"" . $value['preco'] . "\" >
			<input type=\"hidden\" name=\"quantidade_atual\" value=\"" . $value['quantidade_atual'] . "\" >"
			;
 		
 	}
		$con->disconnect();
