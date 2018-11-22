<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Funcionario.class.php');
	require('../../model/Conexao.class.php');
		$funcionario = new Funcionario();
		$sql = $funcionario->select();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
	 	$linha = $con->getLinha();
	 	$funcionario->atribuiDados($linha);
	 	$con->disconnect();