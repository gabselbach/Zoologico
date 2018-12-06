<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Animal.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
		$animal = new Animal(Null,$_POST['nome_popular'],$_POST['nome_cientifico'],$_POST['peso']);
		$sql = $animal->insert();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
    	 $con->disconnect(); //Fecha a execução da query query
    	 header('location:../../view/animal/animal.php');
	}