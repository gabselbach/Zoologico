<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Fornecedor.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
		$f = new Fornecedor(Null,$_POST['tipo'],$_POST['telefone'],$_POST['nome'],$_POST['email']);
		$sql = $f->insert();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
    	 $con->disconnect(); //Fecha a execução da query query
    	 header('location:../../view/fornecedor/fornecedor.php');
	}