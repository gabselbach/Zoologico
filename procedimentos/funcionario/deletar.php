<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Funcionario.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		 $funcionario = new Funcionario($id);
		 $sql = $funcionario->delete();
		 $con = new Conexao();
		 $con->setQuery($sql);
	 	 $con->executeQuery();
	 	 $con->disconnect();
	 	 header('location:../../view/funcionario/funcionario.php');
	 }