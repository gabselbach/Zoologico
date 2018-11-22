<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Animal.class.php');
	if(!isset($flag))
		require('../../model/Conexao.class.php');
	$a = new Animal();
	$sql = $a->selectNome();
	if(!isset($flag))
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazLinha();
 	foreach($array as $i => $value) {
 		echo "<option value=" . $value['idAnimal']. ">" . $value['nome_popular']  . "</option>";
 		
 	}
	 $con->disconnect();
