<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Ingresso.class.php');
	require('../../model/Conexao.class.php');
		$d=$_GET['id'];
		$ali = new Ingresso($_GET['id']);
		$sql = $ali->updateS();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
	 	//ate aqui foi
	 	// ate aqui só alterou a configuração
	 	$sql = $ali->inserirVenda();
	 	$con->setQuery($sql);
	 	$con->executeQuery();

	 	$sql = $con->pegaUltimo();
	 	$con->setQuery($sql);
	 	$con->executeQuery();
	 	$id = $con->linha();

	 	$ali->setIdVenda($id['LAST_INSERT_ID()']);
		$sql = $ali->insertIngresso();
		$con->setQuery($sql);
	 	$con->executeQuery();
		//fazer o insert dessa parte
    	 $con->disconnect(); //Fecha a execução da query query
    	 header('location:../../view/venda/listarIngresso.php');
    	