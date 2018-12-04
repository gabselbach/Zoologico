<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Fornecedor.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
		$a = new Fornecedor($_POST['id'],$_POST['tipo'],$_POST['telefone'],$_POST['nome'],$_POST['email']);
		$sql = $a->update();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
	 	$con->disconnect();
	 	header('location:../../view/fornecedor/listar.php');
	}