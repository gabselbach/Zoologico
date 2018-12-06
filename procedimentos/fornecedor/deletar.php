<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Fornecedor.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		 $a = new Fornecedor($id);
		 $sql = $a->delete();
		 $con = new Conexao();
		 $con->setQuery($sql);
	 	 $con->executeQuery();
	 	 $con->disconnect();
	 	 header('location:../../view/fornecedor/fornecedor.php');
	 }