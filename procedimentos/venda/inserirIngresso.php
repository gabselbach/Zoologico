<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Ingresso.class.php');
	require('../../model/Conexao.class.php');
		$ali = new Ingresso(Null,0);
		$sql = $ali->insert();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
    	 $con->disconnect(); //Fecha a execução da query query
    	 header('location:../../view/venda/venda.php');