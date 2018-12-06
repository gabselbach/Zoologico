<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Alimentação_Animal.class.php');
	$a = new Alimentação_Animal();
	$sql = $a->selectNome();
	if(!isset($flag))
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazLinha();
 	foreach($array as $i => $value) {
 		if($value['sit']==1){
 		echo "<option value=" . $value['idAlimentacao_Animal']. ">" . $value['nome']  . "</option>";
 	}
 		
 	}
	 $con->disconnect();
