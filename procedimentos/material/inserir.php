<?php

	require('../../model/Material.class.php');
	require('../../model/Conexao.class.php');
	if(isset($_POST['submit'])){
		$Material = new Material(Null,$_POST['nome'],$_POST['tipo'],$_POST['preco'],$_POST['quant_atual'],$_POST['quant_ideal'],$_POST['validade'],Null);
		$sql = $Material->insert();
		$con = new Conexao();	
		$con->setQuery($sql);
	 	$con->executeQuery();
	    $con->disconnect(); //Fecha a execução da query query
	    header('location:../../view/material/material.php');
	}