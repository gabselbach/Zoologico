<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	$a = new Souvenir($id);
	$sql = $a->selectSouvenir();
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazlinha();
 	echo"	<input type=\"hidden\" name=\"id\" value=\"$id\" >";
 	foreach($array as $i => $value) {
 		echo "
		
			<p style=\"color: #2e2c2f;\">" . $value['nome'] ."</p>
			<p style=\"color: #2e2c2f;\">".$value['preco']."</p>
			<input type=\"hidden\" name=\"preco\" value=\"" . $value['preco'] . "\" >
			<input type=\"hidden\" name=\"quantidade_atual\" value=\"" . $value['quantidade_atual'] . "\" >"
			;
 		
 	}
		$con->disconnect();
