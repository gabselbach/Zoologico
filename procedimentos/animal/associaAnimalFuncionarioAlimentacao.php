<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Animal.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
			$a = new Animal($_POST['id']);
			$a->setFuncionario_idFuncionario($_POST['funcionario']);
			$a->setAlimentação_idAlimentação($_POST['alimentacao']);
			$sql = $a->updateAF();
			$con = new Conexao();
	$con->setQuery($sql);
 	$con->executeQuery();
 	$con->disconnect();
 		header('location: ../../view/animal/animal.php');
	}else{
		echo "haah";
	}
?>