<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Material.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
		$a = new Material($_POST['id'],$_POST['nome'],null,$_POST['preco'],$_POST['quant_atual'],$_POST['quant_ideal']);
		$sql = $a->update();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
	 	$con->disconnect();
	 	header('location:../../view/material/material.php');
	}