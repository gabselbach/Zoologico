<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Funcionario.class.php');
	require('../../model/Conexao.class.php');
	$funcionario = new Funcionario();
	$sql = $funcionario->selectNome();
	$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$array = $con->fazLinha();
 	foreach($array as $i => $value) {
 		if($value['sit']==1){
 		echo "<option value=" . $value['idFuncionario']. ">" . $value['nome']  . "</option>";
 	}
 		
 	}
	$con->disconnect();
