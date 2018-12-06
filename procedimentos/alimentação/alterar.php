<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Alimentação_Animal.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
		$a = new Alimentação_Animal($_POST['id'],$_POST['nome'],null,$_POST['quantidade'],$_POST['validade']);
		$sql = $a->update();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
	 	$con->disconnect();
	 	header('location:../../view/alimentação/alimentacao.php');
	}