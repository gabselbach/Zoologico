<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Alimentação_Animal.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){

		$ali = new Alimentação_Animal(Null,$_POST['nome'],$_POST['optradio'],$_POST['quantidade'],$_POST['validade']);
		$sql = $ali->insert();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
    	 $con->disconnect(); //Fecha a execução da query query
		header('location:../../view/alimentação/alimentacao.php');
	}