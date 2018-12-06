<?php

	require('../../model/Material.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$a = new Material($id);
		$sql = $a->delete();
		$con = new Conexao();
		$con->setQuery($sql);
	 	$con->executeQuery();
	 	$con->disconnect();
	 	header('location:../../view/material/material.php');
	 }