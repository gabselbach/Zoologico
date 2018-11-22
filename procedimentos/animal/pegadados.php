<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
	require('../../model/Animal.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		 $a = new Animal($id);
		 $sql = $a->selectAnimal();
		 $con = new Conexao();
		 $con->setQuery($sql);
	 	 $con->executeQuery();
	 	 $array = $con->linha();
	 	 $con->disconnect();
	}