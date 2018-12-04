<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Souvenir.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
		$ali = new Souvenir(Null,$_POST['nome'],$_POST['material'],$_POST['preco'],$_POST['quantidade'],$_POST['qt_ideal']);
		$sql = $ali->insert();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
    	 $con->disconnect(); //Fecha a execução da query query
    	header('location:../../view/venda/listarSouvenir.php?v=ok');
	}