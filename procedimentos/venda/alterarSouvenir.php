<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Souvenir.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
		$a = new Souvenir($_POST['id'],$_POST['nome'],$_POST['material'],$_POST['preco'],$_POST['quantidade'],$_POST['qt_ideal']);
		$sql = $a->update();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
	 	$con->disconnect();
	 	header('location:../../view/venda/venda.php');
	}